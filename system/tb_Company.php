<?php
class tb_Company{
    var $Name="";
    var $Password="";
    var $FullName="";
    var $Authed="";
    var $Introduct="";
 /**
     * @return the $Name
     */
    public function getName()
    {
        return $this->Name;
    }

 /**
     * @return the $Password
     */
    public function getPassword()
    {
        return $this->Password;
    }

 /**
     * @return the $FullName
     */
    public function getFullName()
    {
        return $this->FullName;
    }

 /**
     * @return the $Authed
     */
    public function getAuthed()
    {
        return $this->Authed;
    }

 /**
     * @return the $Introduct
     */
    public function getIntroduct()
    {
        return $this->Introduct;
    }

 /**
     * @param string $Name
     */
    public function setName($Name)
    {
        $this->Name = $Name;
    }

 /**
     * @param string $Password
     */
    public function setPassword($Password)
    {
        $this->Password = $Password;
    }

 /**
     * @param string $FullName
     */
    public function setFullName($FullName)
    {
        $this->FullName = $FullName;
    }

 /**
     * @param string $Authed
     */
    public function setAuthed($Authed)
    {
        $this->Authed = $Authed;
    }

 /**
     * @param string $Introduct
     */
    public function setIntroduct($Introduct)
    {
        $this->Introduct = $Introduct;
    }
    
    public function registerSelect(){
        $Name=$this->Name;
        $sql = "select * from Company where Name = '".$Name."'";  
        return $sql;
    }
    public function companyInsert(){
         $sql = "insert into Company(Name,Password,FullName,Authed,Introduct)" ;
        $sql .= " values ('".$this->Name."', '".$this->Password."','".$this->FullName."',0,'".$this->Introduct."')";
        return $sql;
    }
    
    public function loginSelect(){
        $sql="select * from Company where Name = '".$this->Name."' and Password ='".$this->Password."'";
        return $sql;
    }
    
}