<?php

namespace backend\controllers;

use Yii;
use common\models\Cars;
use common\models\CarsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\widgets\ActiveForm;
use common\models\ModelsCar;
use common\models\Categories;
use common\models\BodyTypes;
use yii\base\Model;
use yii\helpers\ArrayHelper;
use backend\models\UploadForm;
use yii\web\UploadedFile;

/**
 * CarsController implements the CRUD actions for Cars model.
 */
class CarsController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Cars models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new CarsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Cars model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Cars model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Cars();
        $modelsBody = [new ModelsCar];
        $categoriesBody = [new Categories];
        $bodyTypes = [new BodyTypes];
        if ($model->load(Yii::$app->request->post())) {
            $modelsBody = Model::createMultiple(ModelsCar::classname());
            Model::loadMultiple($modelsBody, Yii::$app->request->post());

            // ajax validation
            if (Yii::$app->request->isAjax) {
                Yii::$app->response->format = Response::FORMAT_JSON;
                return ArrayHelper::merge(
                    ActiveForm::validateMultiple($modelsBody),
                    ActiveForm::validate($model)
                );
            }
            // validate all models
            $valid = $model->validate();
            $modelBody = reset($modelsBody);
            $dateCreate = date("Y-m-d H:i:s");
            $modelBody->date_create = $dateCreate;
            $modelBody->deleted = 0;
            $valid = Model::validateMultiple($modelsBody) && $valid;
            if ($valid) {
                $transaction = \Yii::$app->db->beginTransaction();
                try {
                    $imageCar = new UploadForm();

                    if (Yii::$app->request->isPost) {
                        $imageCar->file = UploadedFile::getInstance($imageCar, 'file');

                        if ($imageCar->file && $imageCar->validate()) {                
                            $imageCar->file->saveAs('uploads/' . $imageCar->file->baseName . '.' . $imageCar->file->extension);
                        }
                    }
                    
                    if (!($flag = $modelBody->save(false))) {
                        $transaction->rollBack();
                    }
                    $modelBody->save(false);
                    $model->model_id = $modelBody->id;
                    $flag = $model->save(false);
                    if ($flag) {
                        $transaction->commit();
                        return $this->redirect(['view', 'id' => $model->id]);
                    }
                } catch (Exception $e) {
                    $transaction->rollBack();
                }
            }
        }
        return $this->render('create', [
            'model' => $model,
            'modelsBody' => (empty($modelsBody)) ? [new ModelsCar] : $modelsBody,
            'categoriesBody' => (empty($categoriesBody)) ? [new Categories] : $categoriesBody,
            'bodyTypes' => (empty($bodyTypes)) ? [new BodyTypes] : $bodyTypes
        ]);
    }


    /**
     * Updates an existing Cars model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $modelBody = $model->model_id;
        $modelBody = ModelsCar::findOne($modelBody);
        $modelBody = array($modelBody);
        
        $categoriesBody = $model->category_id;
        $categoriesBody = Categories::findOne($categoriesBody);
        $categoriesBody = array($categoriesBody);
        
        $bodyTypes = $model->body_type_id;
        $bodyTypes = BodyTypes::findOne($bodyTypes);
        $bodyTypes = array($bodyTypes);
        
        if ($model->load(Yii::$app->request->post())) {
            $oldIDs = ArrayHelper::map($modelBody, 'id', 'id');
            $modelBody = Model::createMultiple(ModelsCar::classname(), $modelBody);
            Model::loadMultiple($modelBody, Yii::$app->request->post());
            $deletedIDs = array_diff($oldIDs, array_filter(ArrayHelper::map($modelBody, 'id', 'id')));
            // ajax validation
            if (Yii::$app->request->isAjax) {
                Yii::$app->response->format = Response::FORMAT_JSON;
                return ArrayHelper::merge(
                    ActiveForm::validateMultiple($modelBody),
                    ActiveForm::validate($model)
                );
            }
            // validate all models
            $valid = $model->validate();
            $valid = Model::validateMultiple($modelBody) && $valid;
            if ($valid) {
                $transaction = \Yii::$app->db->beginTransaction();
                try {
                    if ($flag = $model->save(false)) {
                        if (! empty($deletedIDs)) {
                            ModelsCar::deleteAll(['id' => $deletedIDs]);
                        }
                        foreach ($modelBody as $modelAddress) {
                            $modelAddress->id = $model->model_id;
                            if (! ($flag = $modelAddress->save(false))) {
                                $transaction->rollBack();
                                break;
                            }
                        }
                    }
                    if ($flag) {
                        $transaction->commit();
                        return $this->redirect(['view', 'id' => $model->id]);
                    }
                } catch (Exception $e) {
                    $transaction->rollBack();
                }
            }
        }
        return $this->render('update', [
            'model' => $model,
            'modelsBody' => (empty($modelBody)) ? [new ModelsCar] : $modelBody,
            'categoriesBody' => (empty($categoriesBody)) ? [new Categories] : $categoriesBody,
            'bodyTypes' => (empty($bodyTypes)) ? [new BodyTypes] : $bodyTypes
        ]);
    }

    /**
     * Deletes an existing Cars model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Cars model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Cars the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Cars::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
}
