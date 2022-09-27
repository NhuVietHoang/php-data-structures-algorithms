<?php
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
    # lấy bản ghi
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
// thêm phần tử vào stack
$player = new PlayerList();
$player -> pushPlayer("cristiano ronaldo");
$player -> pushPlayer("leone messi");
$player -> pushPlayer("mbape");



//lấy phần tử ra từ stack
echo $player -> popPlayer().'<br>'; // lấy ra thằng mbape;

$player ->pushPlayer("neymar jr");

echo $player->top(); // sẽ hiện thằng neymar 

