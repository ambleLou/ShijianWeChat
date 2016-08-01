<?php
class tb_UserDetail{
    var $UserID;
    var $UserName;
    var $RealName;
    var $IDCard;
    var $QQNum;
    var $Sex="";
    var $Height="";
    var $Weight="";
    var $School="无";
    var $Major="无";
    var $Job="";
    var $Introduct="";
    var $AliPay="";
    var $Health="";
    var $PicName="";
    var $CreateTime;
    var $ModifyTime="";
 
 /**
     * @return the $UserID
     */
    public function getUserID()
    {
        return $this->UserID;
    }

 /**
     * @return the $UserName
     */
    public function getUserName()
    {
        return $this->UserName;
    }

 /**
     * @return the $RealName
     */
    public function getRealName()
    {
        return $this->RealName;
    }

 /**
     * @return the $IDCard
     */
    public function getIDCard()
    {
        return $this->IDCard;
    }

 /**
     * @return the $QQNum
     */
    public function getQQNum()
    {
        return $this->QQNum;
    }

 /**
     * @return the $Sex
     */
    public function getSex()
    {
        return $this->Sex;
    }

 /**
     * @return the $Height
     */
    public function getHeight()
    {
        return $this->Height;
    }

 /**
     * @return the $Weight
     */
    public function getWeight()
    {
        return $this->Weight;
    }

 /**
     * @return the $School
     */
    public function getSchool()
    {
        return $this->School;
    }

 /**
     * @return the $Major
     */
    public function getMajor()
    {
        return $this->Major;
    }

 /**
     * @return the $Job
     */
    public function getJob()
    {
        return $this->Job;
    }

 /**
     * @return the $Introduct
     */
    public function getIntroduct()
    {
        return $this->Introduct;
    }

 /**
     * @return the $AliPay
     */
    public function getAliPay()
    {
        return $this->AliPay;
    }

 /**
     * @return the $Health
     */
    public function getHealth()
    {
        return $this->Health;
    }

 /**
     * @return the $PicName
     */
    public function getPicName()
    {
        return $this->PicName;
    }

 /**
     * @return the $CreateTime
     */
    public function getCreateTime()
    {
        return $this->CreateTime;
    }

 /**
     * @return the $ModifyTime
     */
    public function getModifyTime()
    {
        return $this->ModifyTime;
    }



 /**
     * @param field_type $UserID
     */
    public function setUserID($UserID)
    {
        $this->UserID = $UserID;
    }

 /**
     * @param field_type $UserName
     */
    public function setUserName($UserName)
    {
        $this->UserName = $UserName;
    }

 /**
     * @param field_type $RealName
     */
    public function setRealName($RealName)
    {
        $this->RealName = $RealName;
    }

 /**
     * @param field_type $IDCard
     */
    public function setIDCard($IDCard)
    {
        $this->IDCard = $IDCard;
    }

 /**
     * @param field_type $QQNum
     */
    public function setQQNum($QQNum)
    {
        $this->QQNum = $QQNum;
    }

 /**
     * @param string $Sex
     */
    public function setSex($Sex)
    {
        $this->Sex = $Sex;
    }

 /**
     * @param string $Height
     */
    public function setHeight($Height)
    {
        $this->Height = $Height;
    }

 /**
     * @param string $Weight
     */
    public function setWeight($Weight)
    {
        $this->Weight = $Weight;
    }

 /**
     * @param string $School
     */
    public function setSchool($School)
    {
        $this->School = $School;
    }

 /**
     * @param string $Major
     */
    public function setMajor($Major)
    {
        $this->Major = $Major;
    }

 /**
     * @param string $Job
     */
    public function setJob($Job)
    {
        $this->Job = $Job;
    }

 /**
     * @param string $Introduct
     */
    public function setIntroduct($Introduct)
    {
        $this->Introduct = $Introduct;
    }

 /**
     * @param string $AliPay
     */
    public function setAliPay($AliPay)
    {
        $this->AliPay = $AliPay;
    }

 /**
     * @param string $Health
     */
    public function setHealth($Health)
    {
        $this->Health = $Health;
    }

 /**
     * @param string $PicName
     */
    public function setPicName($PicName)
    {
        $this->PicName = $PicName;
    }

 /**
     * @param field_type $CreateTime
     */
    public function setCreateTime($CreateTime)
    {
        $this->CreateTime = $CreateTime;
    }

 /**
     * @param string $ModifyTime
     */
    public function setModifyTime($ModifyTime)
    {
        $this->ModifyTime = $ModifyTime;
    }
    
    public function userIDSelect(){
        $sql="select * from UserDetail where UserID='".$this->UserID."'";
         return $sql;
    }
    public function userDetailInsert() {
        $sql="insert into UserDetail(UserID,UserName,RealName,IDCard,QQNum,Sex,Height,Weight,School,Major,Job,Introduct,AliPay,Health,PicName,CreateTime,ModifyTime)";
        $sql .= " values('".$this->UserID."','".$this->UserName."','".$this->RealName."','".$this->IDCard."','".$this->QQNum."','".$this->Sex."','".$this->Height."','".$this->Weight."','".$this->School."','".$this->Major."','".$this->Job."','".$this->Introduct."','".$this->AliPay."','".$this->Health."','".$this->PicName."','".$this->CreateTime."','".$this->ModifyTime."')";
       return $sql;
    }
    public function userDetailUpdate() {
        $sql="update UserDetail set ";
        $sql .= " UserName='".$this->UserName."',RealName='".$this->RealName."',IDCard='".$this->IDCard."',QQNum='".$this->QQNum."',Sex='".$this->Sex."',Height='".$this->Height."',Weight='".$this->Weight."',School='".$this->School."',Major='".$this->Major."',Job='".$this->Job."',Introduct='".$this->Introduct."',AliPay='".$this->AliPay."',Health='".$this->Health."',PicName='".$this->PicName."',ModifyTime='".$this->ModifyTime."' where UserID= '".$this->UserID."'";
        return $sql;
    }
}