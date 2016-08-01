<?php
class tb_Job{
    var $ID;
    var $CompanyID;
    var $Title;
    var $JobTypeID;
    var $TimeFrom;
    var $TimeTo;
    var $Price;
    var $Location;
    var $Enable=1;
    var $CreateTime;
    /**
     * @return the $ID
     */
    public function getID()
    {
        return $this->ID;
    }

    /**
     * @return the $CompanyID
     */
    public function getCompanyID()
    {
        return $this->CompanyID;
    }

    /**
     * @return the $Title
     */
    public function getTitle()
    {
        return $this->Title;
    }

    /**
     * @return the $JobTypeID
     */
    public function getJobTypeID()
    {
        return $this->JobTypeID;
    }

    /**
     * @return the $TimeFrom
     */
    public function getTimeFrom()
    {
        return $this->TimeFrom;
    }

    /**
     * @return the $TimeTo
     */
    public function getTimeTo()
    {
        return $this->TimeTo;
    }

    /**
     * @return the $Price
     */
    public function getPrice()
    {
        return $this->Price;
    }

    /**
     * @return the $Location
     */
    public function getLocation()
    {
        return $this->Location;
    }

    /**
     * @return the $Enable
     */
    public function getEnable()
    {
        return $this->Enable;
    }

    /**
     * @return the $CreateTime
     */
    public function getCreateTime()
    {
        return $this->CreateTime;
    }

    /**
     * @param field_type $ID
     */
    public function setID($ID)
    {
        $this->ID = $ID;
    }

    /**
     * @param field_type $CompanyID
     */
    public function setCompanyID($CompanyID)
    {
        $this->CompanyID = $CompanyID;
    }

    /**
     * @param field_type $Title
     */
    public function setTitle($Title)
    {
        $this->Title = $Title;
    }

    /**
     * @param field_type $JobTypeID
     */
    public function setJobTypeID($JobTypeID)
    {
        $this->JobTypeID = $JobTypeID;
    }

    /**
     * @param field_type $TimeFrom
     */
    public function setTimeFrom($TimeFrom)
    {
        $this->TimeFrom = $TimeFrom;
    }

    /**
     * @param field_type $TimeTo
     */
    public function setTimeTo($TimeTo)
    {
        $this->TimeTo = $TimeTo;
    }

    /**
     * @param field_type $Price
     */
    public function setPrice($Price)
    {
        $this->Price = $Price;
    }

    /**
     * @param field_type $Location
     */
    public function setLocation($Location)
    {
        $this->Location = $Location;
    }

    /**
     * @param field_type $Enable
     */
    public function setEnable($Enable)
    {
        $this->Enable = $Enable;
    }

    /**
     * @param field_type $CreateTime
     */
    public function setCreateTime($CreateTime)
    {
        $this->CreateTime = $CreateTime;
    }


    public function JobSelectOne() {
        $sql="select * from Job where CompanyID=".$this->CompanyID." and Title='".$this->Title."' and TimeFrom='".$this->TimeFrom."' and TimeTo='".$this->TimeTo."'";
        return $sql;
    }

    //根据时间和基于标题和地点的关键字来进行搜索



    public function JobSelectByID(){
        $sql="select Job.*,JobDetail.*,Company.FullName as CompanyName,JobType.TypeName from Job,JobType, Company,JobDetail where Job.ID=JobDetail.JobID and Company.ID=Job.CompanyID and JobType.ID=Job.JobTypeID ";
        $sql.=" and Job.ID='".$this->ID."'";
        return $sql;
    }

    public function JobInsert() {
        $sql="insert into Job(CompanyID,Title,JobTypeID,TimeFrom,TimeTo,Price,Location,Enable,CreateTime)";
        $sql.=" values ('".$this->CompanyID."','".$this->Title."','".$this->JobTypeID."','".$this->TimeFrom."','".$this->TimeTo."','".$this->Price."','".$this->Location."','".$this->Enable."','".$this->CreateTime."')";
        return $sql;
    }



    public function JobSelectCount($admindb,$conn,$SearchTimeType=0,$SearchName="",$CompanyID='',$JobType='',$UserID='',$JobID='',$StatusID='',$notInJobType='') {
        $nowdate=date("Y-m-d H:i:s");
        $sql="SELECT COUNT(*) as number  from  Job,JobType,Company,JobDetail";

        if(''!=$UserID||''!=$JobID){                    //如果JobID或者UserID存在则联合查询Apply表
            $sql.=",Apply ";
            $sql.=" where Job.ID=JobDetail.JobID and Job.JobTypeID=JobType.ID and Job.CompanyID=Company.ID and Job.Enable=1 and Job.ID=Apply.JobID ";
            if(''!=$UserID){
                $sql.=" and Apply.UserID=$UserID ";
            }
            if(''!=$JobID){
                $sql.=" and Apply.JobID=$JobID ";
            }
            if(''!=$StatusID){
                $sql.=" and Apply.StatusID=$StatusID ";
            }
        }else{
            $sql.=" where Job.ID=JobDetail.JobID and Job.JobTypeID=JobType.ID and Job.CompanyID=Company.ID and Job.Enable=1  ";
        }

        if('0'==$SearchTimeType||''==$SearchTimeType){        //查询所有的

        }else if('1'==$SearchTimeType){                          //查询未开始的
            $sql.=" and Job.TimeFrom >'".$nowdate."' ";

        }else if('2'==$SearchTimeType){                   //查询正在进行的
            $sql.=" and Job.TimeFrom <'".$nowdate."' and Job.TimeTo>'".$nowdate."'  ";

        }else if('3'==$SearchTimeType){                   //查询结束的
            $sql.=" and Job.TimeTo <'".$nowdate."'  ";
        }else if('4'==$SearchTimeType){                     //24小时内的
            $sql.=" and Job.TimeFrom >'".$nowdate."' ";
            $Tomorrowdate=date("Y-m-d H:i:s", time() + 3600 * 24);
            $sql.=" and Job.TimeFrom <'$Tomorrowdate' ";
        }
        if(''!=$CompanyID){
            $sql.="and Job.CompanyID=$CompanyID ";
        }
        if(''!=$JobType){
            $sql.="and Job.JobTypeID=$JobType ";
        }

        if(''!=$notInJobType){
            $sql.=" and Job.JobTypeID not in ($notInJobType) ";
        }

        $sql.=" and (Job.Title like '%".$SearchName."%' or Job.Location like '%".$SearchName."%')";
        $rst = $admindb->ExecSQL($sql,$conn);
        $number=$rst['0']['number'];
        return $number;
    }

    public function JobSelect($startCount=0,$perNumber=100,$SearchTimeType=0,$SearchName="",$CompanyID='',$JobType='',$UserID='',$JobID='',$StatusID='',$notInJobType='') {
        $nowdate=date("Y-m-d H:i:s");
        $sql="select Job.*,Job.CreateTime as JobCreateTime,JobDetail.*,JobType.TypeName as JobTypeName,Company.FullName as CompanyName  from  Job,JobType,Company,JobDetail  ";

        if(''!=$UserID||''!=$JobID){
            $sql.=",Apply ";
            $sql.=" where Job.ID=JobDetail.JobID and Job.JobTypeID=JobType.ID and Job.CompanyID=Company.ID and Job.Enable=1 and Job.ID=Apply.JobID ";
            if(''!=$UserID){
                $sql.=" and Apply.UserID=$UserID ";
            }
            if(''!=$JobID){
                $sql.=" and Apply.JobID=$JobID ";
            }
            if(''!=$StatusID){
                $sql.=" and Apply.StatusID=$StatusID ";
            }
        }else{
            $sql.=" where Job.ID=JobDetail.JobID and Job.JobTypeID=JobType.ID and Job.CompanyID=Company.ID and Job.Enable=1  ";
        }

        if('0'==$SearchTimeType||''==$SearchTimeType){        //查询所有的

        }else if('1'==$SearchTimeType){                          //查询未开始的
            $sql.=" and Job.TimeFrom >'".$nowdate."' ";

        }else if('2'==$SearchTimeType){                   //查询正在进行的
            $sql.=" and Job.TimeFrom <'".$nowdate."' and Job.TimeTo>'".$nowdate."'  ";

        }else if('3'==$SearchTimeType){                   //查询结束的
            $sql.=" and Job.TimeTo <'".$nowdate."'  ";
        }else if('4'==$SearchTimeType){                     //24小时内的
            $sql.=" and Job.TimeFrom >'".$nowdate."' ";
            $Tomorrowdate=date("Y-m-d H:i:s", time() + 3600 * 24);
            $sql.=" and Job.TimeFrom <'$Tomorrowdate' ";
        }
        if(''!=$CompanyID){
            $sql.="and Job.CompanyID=$CompanyID ";
        }
        if(''!=$JobType){
            $sql.="and Job.JobTypeID=$JobType ";
        }

        if(''!=$notInJobType){
            $sql.=" and Job.JobTypeID not in ($notInJobType) ";
        }

        $sql.=" and (Job.Title like '%".$SearchName."%' or Job.Location like '%".$SearchName."%')";
        $sql.=" limit $startCount,$perNumber";
        return $sql;
    }

    /*
    public function JobSelectAllCount($admindb,$conn,$SearchName="",$CompanyID='') {
        if(''==$CompanyID){
            $sql="SELECT COUNT(*) as number  from  Job,JobType,Company,JobDetail where Job.ID=JobDetail.JobID and Job.JobTypeID=JobType.ID and Job.CompanyID=Company.ID and Job.Enable=1   and (Job.Title like '%".$SearchName."%' or Job.Location like '%".$SearchName."%')";

        }else{
            $sql="SELECT COUNT(*) as number  from  Job,JobType,Company,JobDetail where Job.ID=JobDetail.JobID and Job.JobTypeID=JobType.ID and Job.CompanyID=Company.ID and Job.Enable=1   and Job.CompanyID=$CompanyID and (Job.Title like '%".$SearchName."%' or Job.Location like '%".$SearchName."%') ";

        }
        $rst = $admindb->ExecSQL($sql,$conn);
        return $rst;
    }
     public function JobNoBeginSelectCount($admindb,$conn,$SearchName="",$CompanyID=''){
         $nowdate=date("Y-m-d H:i:s");
         if(''==$CompanyID){
            $sql="SELECT COUNT(*) as number  from  Job,JobType,Company,JobDetail where Job.ID=JobDetail.JobID and Job.JobTypeID=JobType.ID and Job.CompanyID=Company.ID and Job.Enable=1 and Job.TimeFrom >'".$nowdate."'  and (Job.Title like '%".$SearchName."%' or Job.Location like '%".$SearchName."%')";
        }else{
            $sql="SELECT COUNT(*) as number  from  Job,JobType,Company,JobDetail where Job.ID=JobDetail.JobID and Job.JobTypeID=JobType.ID and Job.CompanyID=Company.ID and Job.Enable=1 and Job.TimeFrom >'".$nowdate."'  and Job.CompanyID=$CompanyID and (Job.Title like '%".$SearchName."%' or Job.Location like '%".$SearchName."%') ";
        }
        $rst = $admindb->ExecSQL($sql,$conn);
        return $rst;
    }

    public function JobBeginningSelectCount($admindb,$conn,$SearchName="",$CompanyID=''){
        $nowdate=date("Y-m-d H:i:s");
        if(''==$CompanyID){
            $sql="SELECT COUNT(*) as number  from  Job,JobType,Company,JobDetail where Job.ID=JobDetail.JobID and Job.JobTypeID=JobType.ID and Job.CompanyID=Company.ID and Job.Enable=1 and Job.TimeFrom <'".$nowdate."' and Job.TimeTo>'".$nowdate."'  and (Job.Title like '%".$SearchName."%' or Job.Location like '%".$SearchName."%')";

        }else{
            $sql="SELECT COUNT(*) as number  from  Job,JobType,Company,JobDetail where Job.ID=JobDetail.JobID and Job.JobTypeID=JobType.ID and Job.CompanyID=Company.ID and Job.Enable=1 and Job.TimeFrom <'".$nowdate."' and Job.TimeTo>'".$nowdate."'  and Job.CompanyID=$CompanyID and (Job.Title like '%".$SearchName."%' or Job.Location like '%".$SearchName."%') ";

        }
        $rst = $admindb->ExecSQL($sql,$conn);
        return $rst;
    }
    public function JobEndSelectCount($admindb,$conn,$SearchName="",$CompanyID=''){
        $nowdate=date("Y-m-d H:i:s");
        if(''==$CompanyID){
            $sql="SELECT COUNT(*) as number  from  Job,JobType,Company,JobDetail where Job.ID=JobDetail.JobID and Job.JobTypeID=JobType.ID and Job.CompanyID=Company.ID and Job.Enable=1 and Job.TimeTo <'".$nowdate."'  and (Job.Title like '%".$SearchName."%' or Job.Location like '%".$SearchName."%')";

        }else{
            $sql="SELECT COUNT(*) as number  from  Job,JobType,Company,JobDetail where Job.ID=JobDetail.JobID and Job.JobTypeID=JobType.ID and Job.CompanyID=Company.ID and Job.Enable=1 and Job.TimeTo <'".$nowdate."'  and Job.CompanyID=$CompanyID and (Job.Title like '%".$SearchName."%' or Job.Location like '%".$SearchName."%') ";

        }
        $rst = $admindb->ExecSQL($sql,$conn);
        return $rst;
    }



    public function JobSelectAll($startCount=0,$perNumber=100,$SearchName="",$CompanyID='') {

        if(''==$CompanyID){
            $sql="select Job.*,Job.CreateTime as JobCreateTime,JobDetail.*,JobType.TypeName as JobTypeName,Company.FullName as CompanyName  from  Job,JobType,Company,JobDetail where Job.ID=JobDetail.JobID and Job.JobTypeID=JobType.ID and Job.CompanyID=Company.ID and Job.Enable=1   and (Job.Title like '%".$SearchName."%' or Job.Location like '%".$SearchName."%') limit $startCount,$perNumber";

        }else{
            $sql="select Job.*,Job.CreateTime as JobCreateTime,JobDetail.*,JobType.TypeName as JobTypeName,Company.FullName as CompanyName  from  Job,JobType,Company,JobDetail where Job.ID=JobDetail.JobID and Job.JobTypeID=JobType.ID and Job.CompanyID=Company.ID and Job.Enable=1  and Job.CompanyID=$CompanyID and (Job.Title like '%".$SearchName."%' or Job.Location like '%".$SearchName."%')  limit $startCount,$perNumber ";

        }
        return $sql;
    }

    public function JobNoBeginSelect($startCount=0,$perNumber=100,$SearchName="",$CompanyID=''){
        $nowdate=date("Y-m-d H:i:s");
        if(''==$CompanyID){
            $sql="select Job.*,Job.CreateTime as JobCreateTime,JobDetail.*,JobType.TypeName as JobTypeName,Company.FullName as CompanyName  from  Job,JobType,Company,JobDetail where Job.ID=JobDetail.JobID and Job.JobTypeID=JobType.ID and Job.CompanyID=Company.ID and Job.Enable=1 and Job.TimeFrom >'".$nowdate."'  and (Job.Title like '%".$SearchName."%' or Job.Location like '%".$SearchName."%') limit $startCount,$perNumber";

        }else{
            $sql="select Job.*,Job.CreateTime as JobCreateTime,JobDetail.*,JobType.TypeName as JobTypeName,Company.FullName as CompanyName  from  Job,JobType,Company,JobDetail where Job.ID=JobDetail.JobID and Job.JobTypeID=JobType.ID and Job.CompanyID=Company.ID and Job.Enable=1 and Job.TimeFrom >'".$nowdate."'  and Job.CompanyID=$CompanyID and (Job.Title like '%".$SearchName."%' or Job.Location like '%".$SearchName."%')  limit $startCount,$perNumber";

        }
        return $sql;
    }
    public function JobBeginningSelect($startCount=0,$perNumber=100,$SearchName="",$CompanyID=''){
        $nowdate=date("Y-m-d H:i:s");
        if(''==$CompanyID){
            $sql="select Job.*,Job.CreateTime as JobCreateTime,JobDetail.*,JobType.TypeName as JobTypeName,Company.FullName as CompanyName  from  Job,JobType,Company,JobDetail where Job.ID=JobDetail.JobID and Job.JobTypeID=JobType.ID and Job.CompanyID=Company.ID and Job.Enable=1 and Job.TimeFrom <'".$nowdate."' and Job.TimeTo>'".$nowdate."' and (Job.Title like '%".$SearchName."%' or Job.Location like '%".$SearchName."%') limit $startCount,$perNumber";

        }else{
            $sql="select Job.*,Job.CreateTime as JobCreateTime,JobDetail.*,JobType.TypeName as JobTypeName,Company.FullName as CompanyName  from  Job,JobType,Company,JobDetail where Job.ID=JobDetail.JobID and Job.JobTypeID=JobType.ID and Job.CompanyID=Company.ID and Job.Enable=1 and Job.TimeFrom <'".$nowdate."' and Job.TimeTo>'".$nowdate."' and Job.CompanyID=$CompanyID and (Job.Title like '%".$SearchName."%' or Job.Location like '%".$SearchName."%')  limit $startCount,$perNumber";

        }
        return $sql;
    }
    public function JobEndSelect($startCount=0,$perNumber=100,$SearchName="",$CompanyID=''){
        $nowdate=date("Y-m-d H:i:s");
        if(''==$CompanyID){
            $sql="select Job.*,Job.CreateTime as JobCreateTime,JobDetail.*,JobType.TypeName as JobTypeName,Company.FullName as CompanyName  from  Job,JobType,Company,JobDetail where Job.ID=JobDetail.JobID and Job.JobTypeID=JobType.ID and Job.CompanyID=Company.ID and Job.Enable=1 and Job.TimeTo <'".$nowdate."'   and (Job.Title like '%".$SearchName."%' or Job.Location like '%".$SearchName."%') limit $startCount,$perNumber";

        }else{
            $sql="select Job.*,Job.CreateTime as JobCreateTime,JobDetail.*,JobType.TypeName as JobTypeName,Company.FullName as CompanyName  from  Job,JobType,Company,JobDetail where Job.ID=JobDetail.JobID and Job.JobTypeID=JobType.ID and Job.CompanyID=Company.ID and Job.Enable=1 and Job.TimeTo <'".$nowdate."'   and Job.CompanyID=$CompanyID and (Job.Title like '%".$SearchName."%' or Job.Location like '%".$SearchName."%')  limit $startCount,$perNumber";

        }
        return $sql;
    }
     */
    /* public function JobTitleLikeSelect($SearchName,$startCount=0,$perNumber=100){
        $nowdate=date("Y-m-d H:i:s");
        if(''==$CompanyID){
            $sql="select Job.*,Job.CreateTime as JobCreateTime,JobDetail.*,JobType.TypeName as JobTypeName,Company.FullName as CompanyName  from  Job,JobType,Company,JobDetail where Job.ID=JobDetail.JobID and Job.JobTypeID=JobType.ID and Job.CompanyID=Company.ID and Job.Enable=1 and (Job.Title like '%".$SearchName."%' or Job.Location like '%".$SearchName."%') limit $startCount,$perNumber";

        }else{
            $sql="select Job.*,Job.CreateTime as JobCreateTime,JobDetail.*,JobType.TypeName as JobTypeName,Company.FullName as CompanyName  from  Job,JobType,Company,JobDetail where Job.ID=JobDetail.JobID and Job.JobTypeID=JobType.ID and Job.CompanyID=Company.ID and Job.Enable=1 and Job.CompanyID=$CompanyID and (Job.Title like '%".$SearchName."%' or Job.Location like '%".$SearchName."%')  limit $startCount,$perNumber";

        }
        return $sql;
    }
    public function JobTitleLikeSelectCount($admindb,$conn,$SearchName="",$CompanyID=''){
        $nowdate=date("Y-m-d H:i:s");
        if(''==$CompanyID){

        }else{

        }
        $sql="SELECT COUNT(*) as number  from  Job,JobType,Company,JobDetail where Job.ID=JobDetail.JobID and Job.JobTypeID=JobType.ID and Job.CompanyID=Company.ID and Job.Enable=1 and (Job.Title like '%".$SearchName."%' or Job.Location like '%".$SearchName."%')";
        $rst = $admindb->ExecSQL($sql,$conn);
        return $rst;
    }  */


}
	