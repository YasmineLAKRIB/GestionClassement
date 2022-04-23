<?php

namespace app\controllers;

use app\models\FACULTE;
use app\models\FACULTESearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * FACULTE0000Controller implements the CRUD actions for FACULTE0000 model.
 */
class FaculteController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all FACULTE0000 models.
     *
     * @return string
     */
    public function actionIndex()
    {
        
        $searchModel = new FACULTESearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single FACULTE0000 model.
     * @param string $FACCODE Faccode
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($FACCODE)
    {
        return $this->render('view', [
            'model' => $this->findModel($FACCODE),
        ]);
    }

    /**
     * Creates a new FACULTE0000 model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new FACULTE();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'FACCODE' => $model->FACCODE]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing FACULTE0000 model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $FACCODE Faccode
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($FACCODE)
    {
        $model = $this->findModel($FACCODE);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'FACCODE' => $model->FACCODE]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing FACULTE0000 model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $FACCODE Faccode
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($FACCODE)
    {
        $this->findModel($FACCODE)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the FACULTE0000 model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $FACCODE Faccode
     * @return FACULTE the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($FACCODE)
    {
        if (($model = FACULTE::findOne(['FACCODE' => $FACCODE])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
