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
    public function enQueue($value){
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
$queue->enQueue("start");
$queue->enQueue(1);
$queue->enQueue(2);
$queue->enQueue(3);
$queue->enQueue(4);
$queue->enQueue("End");
while(!$queue->isEmpty())
{  echo $queue->deQueue()."\n";}