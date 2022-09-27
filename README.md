# Php-data-structures-algorithms
Đề bài yêu cầu tìm hiểu về cấu trúc dữ liệu và giải thuật.
Thực hiện bởi: Nhữ Việt Hoàng

Download code và run code tại đường dẫn:

# data structutes
Việt Hóa nó là cấu trúc dữ liệu, trong bài này tìm hiểu về 2 cấu trúc là Stack và Queue
# # Stack 
Hiểu việt hóa thì nó là ngăn xếp ,là kiểu danh sách dữ liệu mà cho phép bổ xung và loại bỏ luôn ở được thực hiện ở 1 đầu
* * push:thêm phần tử vào stack ,tức là nó được thêm vào sau các phần tử đã có sẵn trong stack.
* * pop : giải phóng và trả về phần tử trên đỉnh stack- phần tử cuối them vào trc khi thực hiện pop,phần tử này say khi lấy ra sẽ bị xóa khỏi stack.
* * isEmpty(): kiểm tra xem stack rỗng hay không.
* * top():trả về giá trị trên cùng mà không xóa nó khỏi stack.
* Cách cài đặt Stack trong PHP:
* Khởi tạo:
```php
    class PlayerList{
    protected $stack;
    protected $limit;
    public function __construct($limit =10)
    {
        # khởi taọ stack
        $this->stack = array();
        # giới hạn phần tử trong stack
        $this->limit = $limit;
    }
    public function pushPlayer($player){
        if (count($this->stack) < $this->limit) {
            // thêm vào vị trí đầu stack
            array_unshift($this->stack, $player);
        } else {
            echo "đầy rồi";
        }
    }
    # lấy ra bản ghi
    public function popPlayer(){
        if ($this->isEmpty()) {
            // kiểu tra xem còn ko
           echo "hết rồi";
        } else {
            
            return array_shift($this->stack);
        }
    
    }
    public function isEmpty() {
        return empty($this->stack);
    }
     //Tra ve gia tri đầu tiên của stack
     public function top() {
        return current($this->stack);
    }
}
```
* thêm vào vị trí đầu stack
code:
```php 
    public function pushPlayer($player){
        if (count($this->stack) < $this->limit) {
            // thêm vào vị trí đầu stack
            array_unshift($this->stack, $player);
        } else {
            echo "đầy rồi";
        }
    }
$player = new PlayerList();
$player -> pushPlayer("cristiano ronaldo");
$player -> pushPlayer("leone messi");
$player -> pushPlayer("mbape");

var_dump($player);
```
kết quả:
object(PlayerList)#1 (2) { ["stack":protected]=> array(3) { [0]=> string(5) "mbape" [1]=> string(11) "leone messi" [2]=> string(17) "cristiano ronaldo" } ["limit":protected]=> int(10) } 

* Lấy bản ghi
code :
```php 
    echo $player -> popPlayer().'<br>'; // lấy ra thằng mbape;

    var_dump($player);
```

kết quả:
mbape
object(PlayerList)#1 (2) { ["stack":protected]=> array(2) { [0]=> string(11) "leone messi" [1]=> string(17) "cristiano ronaldo" } ["limit":protected]=> int(10) } 

* xem thành phần đầu tiên của stack:
code:
```php
     public function top() {
        return current($this->stack);
    }
```
kết quả: messi vì thằng mbape đã bị xóa


# # Queue
Hàng đợi (Queue) là một cấu trúc dữ liệu trừu tượng. Đặc điểm của hàng đợi là FIFO (first in first out) - có nghĩa là vào trước ra trước.
Khác với ngăn xếp, hàng đợi là mở ở cả hai đầu. Một đầu luôn luôn được sử dụng để chèn dữ liệu vào (hay còn gọi là sắp vào hàng) và đầu kia được sử dụng để xóa dữ liệu (rời hàng). Cấu trúc dữ liệu hàng đợi tuân theo phương pháp First-In-First-Out, tức là dữ liệu được nhập vào đầu tiên sẽ được truy cập đầu tiên.

* cách cài đặt 1 Queue đơn giản
```php 
    
// lớp Element đại diện cho 1 phần tử trong Queue
class Element{
    public $value; // giá trị của phần tử
    public $next; // trỏ đến phần tử phía sau nó
}
class Queue{
    Private $font = null;
    Private $back = null;
    /*
    * Kiểm tra xem queue có rỗng không
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
  */    
    public function deQueue(){  
      if ($this->isEmpty()) {       
          return null;      
      }     $removedValue = $this->font->value; 
            $this->font = $this->font->next;  
            return $removedValue;   
      }

    Public function Front(){
        return $this->font->value;
    }
   
}
$queue = new Queue();
$queue->enQueue("start");
$queue->enQueue(1);
$queue->enQueue(2);
$queue->enQueue(3);
$queue->enQueue(4);
$queue->enQueue("End");
echo $queue->Front();
while(!$queue->isEmpty())
{  echo $queue->deQueue()."\n";}

``` 
kết quả:start start 1 2 3 4 End 


# Algorithms

## Searching
* LinearSearch
   - Bắt đầu từ bản ghi đầu tiên của mảng, duyệt từ đầu mảng đến cuối mảng với x.
   - Nếu phần tử đang duyệt bằng x thì trả về vị trí.
   - Nếu không tìm thấy bất cứ phần từ nào khi đã duyệt hết thì trả về -1.
VD:
```php
    # tìm 1 số trong mảng ,VD:tìm số 5 trong mảng 
    $array =['1','2','3','4','5','6','7'];

    function LinearSearch($array){
        $quantity = count($array);
        $dem = 0;
        for($i = 0; $i<$quantity;$i++){
            if($array[$i]==5){
                $dem +=1 ;
            }
        }
        echo  "có $dem số 5";
    }
```
## Tìm kiếm nhị phân
phù hợp với mảng đã được sắp xếp
Thụât toán tìm kiếm nhị phân thực hiện tìm kiếm một mảng đã sắp xếp bằng cách liên tục chia các khoảng tìm kiếm thành 1 nửa. Bắt đầu với một khoảng từ phần tử đầu mảng, tới cuối mảng. Nếu giá trị của phần tử cần tìm nhỏ hơn giá trị của phần từ nằm ở giữa khoảng thì thu hẹp phạm vi tìm kiếm từ đầu mảng tới giửa mảng và nguợc lại. Cứ thế tiếp tục chia phạm vi thành các nửa cho dến khi tìm thấy hoặc đã duyệt hết.

Thuật toán tìm kiếm nhị phân tỏ ra tối ưu hơn so với tìm kiếm tuyết tính ở các mảng có độ dài lớn và đã được sắp xếp. Ngược lại, tìm kiếm tuyến tính sẽ tỏ ra hiệu quả hơn khi triển khai trên các mảng nhỏ và chưa được sắp xếp.
VD:




