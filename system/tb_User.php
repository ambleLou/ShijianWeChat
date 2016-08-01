<?php
class tb_User{
    var $Phone="";
    var $Password="";
    var $WeiID="";
    var $Invitation="";
    var $CreateTime="";
 /**
     * @return the $Phone
     */
    public function getPhone()
    {
        return $this->Phone;
    }

 /**
     * @return the $Password
     */
    public function getPassword()
    {
        return $this->Password;
    }

 /**
     * @return the $WeiID
     */
    public function getWeiID()
    {
        return $this->WeiID;
    }

 /**
     * @return the $Invitation
     */
    public function getInvitation()
    {
        return $this->Invitation;
    }

 /**
     * @return the $CreateTime
     */
    public function getCreateTime()
    {
        return $this->CreateTime;
    }

 /**
     * @param field_type $Phone
     */
    public function setPhone($Phone)
    {
        $this->Phone = $Phone;
    }

 /**
     * @param field_type $Password
     */
    public function setPassword($Password)
    {
        $this->Password = $Password;
    }

 /**
     * @param field_type $WeiID
     */
    public function setWeiID($WeiID)
    {
        $this->WeiID = $WeiID;
    }

 /**
     * @param field_type $Invitation
     */
    public function setInvitation($Invitation)
    {
        $this->Invitation = $Invitation;
    }

 /**
     * @param field_type $CreateTime
     */
    public function setCreateTime($CreateTime)
    {
        $this->CreateTime = $CreateTime;
    }
    
    public function registerSelect(){
       $Phone=$this->Phone;
        $sql = "select * from User where Phone = '".$Phone."'";
      
        return $sql;
    }
    public function phoneSelect(){
        $Phone=$this->Phone;
        $sql = "select * from User where Phone = '".$Phone."'";
        return $sql;
    }
    public function loginSelect(){
        $Phone=$this->Phone;
        $Password=$this->Password;
        $sql = "select * from User where Phone = '".$Phone."' and Password='".$Password."'";
        return $sql;
    }
    public function weiIDSelect(){
        $sql = "select * from User where WeiID = '".$this->WeiID."'";
        return $sql;
    }
    public function userInsert(){
        $sql = "insert into User(Phone,Password,WeiID,Invitation,CreateTime)" ;
        $sql .= " values ('".$this->Phone."', '".$this->Password."','".$this->WeiID."','".$this->Invitation."','".$this->CreateTime."')";
        return $sql;
    }
    
}