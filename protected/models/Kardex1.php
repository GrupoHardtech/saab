<?php

/**
 * This is the model class for table "kardex1".
 *
 * The followings are the available columns in table 'kardex1':
 * @property integer $iDBien
 * @property string $bien
 * @property string $caracteristica
 * @property string $medida
 * @property integer $stockActual
 * @property integer $stockMinimo
 */
class Kardex1 extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'kardex1';
	}
        
        public function primaryKey() {
            return 'iDBien';
        }

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('bien, medida', 'required'),
			array('iDBien, stockActual, stockMinimo', 'numerical', 'integerOnly'=>true),
			array('bien, caracteristica', 'length', 'max'=>150),
			array('medida', 'length', 'max'=>25),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('iDBien, bien, caracteristica, medida, stockActual, stockMinimo', 'safe', 'on'=>'search'),
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
			'bien' => 'Bien',
			'caracteristica' => 'Caracteristica',
			'medida' => 'Medida',
			'stockActual' => 'Stock Actual',
			'stockMinimo' => 'Stock Minimo',
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
		$criteria->compare('bien',$this->bien,true);
		$criteria->compare('caracteristica',$this->caracteristica,true);
		$criteria->compare('medida',$this->medida,true);
		$criteria->compare('stockActual',$this->stockActual);
		$criteria->compare('stockMinimo',$this->stockMinimo);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Kardex1 the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}