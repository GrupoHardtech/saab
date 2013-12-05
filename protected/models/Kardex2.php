<?php

/**
 * This is the model class for table "kardex2".
 *
 * The followings are the available columns in table 'kardex2':
 * @property integer $IDBIEN
 * @property integer $documento
 * @property string $fecha
 * @property string $descripcion
 * @property integer $entradas
 * @property integer $salidas
 */
class Kardex2 extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'kardex2';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('IDBIEN, documento, entradas, salidas', 'numerical', 'integerOnly'=>true),
			array('descripcion', 'length', 'max'=>7),
			array('fecha', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('IDBIEN, documento, fecha, descripcion, entradas, salidas', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'IDBIEN' => 'Bien',
			'documento' => 'Documento',
			'fecha' => 'Fecha',
			'descripcion' => 'Descripción',
			'entradas' => 'Entradas',
			'salidas' => 'Salidas',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('IDBIEN',$this->IDBIEN);
		$criteria->compare('documento',$this->documento);
		$criteria->compare('fecha',$this->fecha,true);
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('entradas',$this->entradas);
		$criteria->compare('salidas',$this->salidas);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			'sort' => array(
				'defaultOrder' => 'fecha asc'
			),
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Kardex2 the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
