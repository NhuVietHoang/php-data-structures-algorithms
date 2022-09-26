<?php 
class Element{
    public $value;
    public $next;
}
class Queue{
    Private $font = null;
    Private $back = null;
    /*
    * Kiểm tra xem hàng chờ có rỗng không
    * @return  $boolean 

    */
    public function isEmpty(){
      return  $this->font == null;
    }

    /*
    * chèn phần tử vào cuối Queue
    * @param $value
    */
    public function pushQueue($value){
        $oldBack = $this->back;
        $this->back = new Element();
        $this->back->value = $value;
        $this->back->value = $value;   
        if ($this->isEmpty()) {     
          $this->font = $this->back;   
        } else {      
         $oldBack->next = $this->back;     
      }   
    }
    /**   
  * xóa phần tử font của hàng đợi  
  * @return $value  
   * public function dequeue(){ return 0; }     
*/    public function deQueue()    {  
    if ($this->isEmpty()) {       
        return null;      
     }        $removedValue = $this->font->value; 
          $this->font = $this->font->next;  
         return $removedValue;   
     }
}
$queue = new Queue();
$queue->pushQueue("start");
$queue->pushQueue(1);
$queue->pushQueue(2);
$queue->pushQueue(3);
$queue->pushQueue(4);
$queue->pushQueue("End");
while(!$queue->isEmpty())
{  echo $queue->deQueue()."\n";}