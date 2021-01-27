<?php
interface IRead
{
    public function reading(IRead $data);
    public function readingOfId(IRead $data,$_id);
    public function isExists(IRead $data);
}
?>