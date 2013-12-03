<?php

/**
 * This is the model class for table "kardexentrada".
 *
 * The followings are the available columns in table 'kardexentrada':
 * @property integer $iDBien
 * @property string $fecha
 * @property integer $cantidadEntrada
 * @property string $precioUnit
 * @property string $numDocumento
 */
class Kardexentrada extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'kardexentrada';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('fecha, cantidadEntrada, precioUnit, numDocumento', 'required'),
			array('iDBien, cantidadEntrada', 'numerical', 'integerOnly'=>true),
			array('precioUnit', 'length', 'max'=>10),
			array('numDocumento', 'length', 'max'=>150),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('iDBien, fecha, cantidadEntrada, precioUnit, numDocumento', 'safe', 'on'=>'search'),
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
			'iDBien' => 'I Dbien',
			'fecha' => 'Fecha',
			'cantidadEntrada' => 'Cantidad Entrada',
			'precioUnit' => 'Precio Unit',
			'numDocumento' => 'Num Documento',
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

		$criteria->compare('iDBien',$this->iDBien);
		$criteria->compare('fecha',$this->fecha,true);
		$criteria->compare('cantidadEntrada',$this->cantidadEntrada);
		$criteria->compare('precioUnit',$this->precioUnit,true);
		$criteria->compare('numDocumento',$this->numDocumento,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Kardexentrada the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
