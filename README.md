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
* Tìm kiếm nhị phân
phù hợp với mảng đã được sắp xếp
Thụât toán tìm kiếm nhị phân thực hiện tìm kiếm một mảng đã sắp xếp bằng cách liên tục chia các khoảng tìm kiếm thành 1 nửa. Bắt đầu với một khoảng từ phần tử đầu mảng, tới cuối mảng. Nếu giá trị của phần tử cần tìm nhỏ hơn giá trị của phần từ nằm ở giữa khoảng thì thu hẹp phạm vi tìm kiếm từ đầu mảng tới giửa mảng và nguợc lại. Cứ thế tiếp tục chia phạm vi thành các nửa cho dến khi tìm thấy hoặc đã duyệt hết.

Thuật toán tìm kiếm nhị phân tỏ ra tối ưu hơn so với tìm kiếm tuyết tính ở các mảng có độ dài lớn và đã được sắp xếp. Ngược lại, tìm kiếm tuyến tính sẽ tỏ ra hiệu quả hơn khi triển khai trên các mảng nhỏ và chưa được sắp xếp.
VD:
```php
    function TimKiemNhiPhan($mang,$gt,$dau,$cuoi){
        if($dau>$cuoi){
            return False;
        }
        $giua = ($dau + $cuoi)/2;
        if($gt == $mang[$giua]){
            return True;
        }
        else if($gt < $mang[$giua]){
            $cuoi =$giua -1 ;
            if($gt == $mang[$cuoi]){
                return true;
            }
            return TimKiemNhiPhan($mang,$gt,$dau,$cuoi)
        }
        else if ($gt >$mang[$giua]){
            $dau= $giua +1;
            if($gt == $mang[$dau]){
                return True;
            }
            return TimKiemNhiPhan($mang,$gt,$dau,$cuoi);
        }
    }

```

## Sorting 

* Bubble sort
Cho vòng lặp $i chạy từ 1 tới ($n-1):

Lần lặp 1: $i = 1, lần lược so sánh với các vị trí khác bắt đầu từ ($i + 1) tức là vị trí 2, nếu phần tử thứ 1 lớn hơn các phần tử đứng sau bắt đầu từ 2 thì hoán vị chúng.

Lần lặp 2: $i = 2, lần lược so sánh với các vị trí khác bắt đầu từ ($i + 1) tức là vị trí 3, nếu phần tử thứ 2 lớn hơn các phần tử đứng sau nó bắt đầu từ 3 thì hoán vụ chúng.

Cứ như vậy cho đến khi ta lặp lần thứ ($n – 1), lúc này biến $i = ($n-1), ta so sánh với phần tử cuối cùng ($n) và hoán vị nếu không thỏa mãn

code:

```php
    $Array = ['1','5','9','2','4','9'];
$quantity = count($Array);
# sắp xếp nổi bọt giảm dần

for($i =0;$i<= $quantity ;$i++ ) {
    for ($j = 0; $j < $quantity; $j++) {
        if ($Array[$i] > $Array[$j]) // nếu phần tử $i  hơn phần tử phía sau
        {
            // hoán vị
            $tmp = $Array[$j];
            $Array[$j] = $Array[$i];
            $Array[$i] = $tmp;
        }
    }
}
for($i =0; $i <5 ;$i++){
    echo $Array[$i];
}

```
kết quả 
```php
    9 9 5 4 2 1
```
* Insertion sort
ý tưởng: Trước hết ta xem phần tử a[0] là một dãy đã có thứ tự.

Bước 1: Chèn phần tử a[1] vào dãy a[0] theo đúng vị trí sao cho dãy a[0] và a[1] được sắp xếp đúng thứ tự.

Bước 2: Chèn phần tử a[2] vào dãy a[0], a[1] sao cho dãy a[0], a[1], a[2] được sắp xếp đúng thứ tự.

Bước i: Chèn phần tử a[i] vào dãy a[o], a[1], a[2], …, a[i-1] sao cho dãy a[o], a[1], a[2], …, a[i-1], a[i] được sắp xếp đúng thứ tự

Sau N-1 bước thì kết thúc (vì mảng có N-1 phần tử).

VD:
```php
<?php 
// $mang = ['9','2','3','1','7','6','8'];
$mang = [9,2,3,1,7,6,8];

InsertionSort($mang);

function InsertionSort($mang)  {
    // Tổng số phần tử
    $sophantu = count($mang);
  
    // Lặp qua từng phần tử của mảng để sắp xếp
    for ($i = 0; $i < $sophantu; $i++)
    {
        // Lặp từ phần tử thứ $i, ví dụ $i = 6
        // thì sẽ lặp từ phần tử số 6 trở về 0 để kiểm tra
        $loop = $i;
  
        // Lưu lại giá trị của $mang[$i] để khỏi bị mất
        $current = $mang[$i];
  
        // điều kiện dừng là $loop <= 0 (tức là hết mảng) hoặc
        // phần tử thứ $loop - 1 bé hơn phần tử thứ $i (vì đã tìm đc đúng vị trí)
        // nếu một trong 2 điều kiện đó đúng thì sẽ dừng vòng lặp
        while($loop > 0 && ($mang[$loop - 1] > $current))
        {
            // Di dời các phần tử lên 1 bậc
            $mang[$loop] = $mang[$loop - 1];
            $loop -= 1;
        }
  
        // Gán giá trị $current vào vị trí tìm được
        $mang[$loop] = $current;
    }
    var_dump($mang);
}
```
kết quả:
```php
    array(7) { [0]=> int(1) [1]=> int(2) [2]=> int(3) [3]=> int(6) [4]=> int(7) [5]=> int(8) [6]=> int(9) } 
```
* Selection Sort
Với thuật toán nổi bọt thì ý tưởng là với mỗi phần tử sẽ lặp hết các phần tử phía sau, nếu phần tử nào không đứng đúng vị trí thì hoán vị ngay lập tức. Với thuật toán sắp xếp chọn trong php thì lại khác, ý tưởng như sau: Duyệt từ vị trí thứ 1 đến vị trí cuối cùng, tìm vị trí phần tử nhỏ nhất sau đó hoán vị với vị trí số 1, sau đó loại vị trí số 1 ra khỏi danh sách sắp xếp vì nó đã được đặt đúng vị trí. Tiếp tục thao tác như vậy cho các vị trí tiếp theo.
VD:
```php
    $mang = ['9','2','3','1','7','6','8'];
# sắp xếp chọn tăng dần
function SelectionSort($mang)
{
    // Đếm tổng số phần tử của mảng
    $sophantu = count($mang);

    // Lặp để sắp xếp
    for ($i = 0; $i < $sophantu - 1; $i++)
    {
        // Tìm vị trí phần tử nhỏ nhất
        $min = $i;
        for ($j = $i + 1; $j < $sophantu; $j++){
            if ($mang[$j] < $mang[$min]){
                $min = $j;
            }
        }

        // Sau khi có vị trí nhỏ nhất thì hoán vị
        // với vị trí thứ $i
        $temp = $mang[$i];
        $mang[$i] = $mang[$min];
        $mang[$min] = $temp;
    }

    // Trả về mảng đã sắp xếp
    var_dump($mang);
    return $mang;
}
SelectionSort($mang);

```

kết quả 
```php
    array(7) { [0]=> string(1) "1" [1]=> string(1) "2" [2]=> string(1) "3" [3]=> string(1) "6" [4]=> string(1) "7" [5]=> string(1) "8" [6]=> string(1) "9" } 
```
