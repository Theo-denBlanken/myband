<?php

if (isset($_POST['fill'])) {
    echo 'Started Filling <br />';
    for ($i = 1; $i < 101; $i++) {
        insert_line($i);
    }
echo 'Inserted 100 Rows';
}


if (isset($_POST['empty'])) {
empty_table();
echo 'Cleaned the table';
}
function connect(){
    $mysqli = new mysqli('localhost', 'root', '' , 'myband');
    if ($mysqli->connect_errno) {
        echo 'Connection error: ' . $mysqli->connect_errno;
    }
    return $mysqli;
}
function insert_line($i) {
    $mysqli = connect();
    $author = $i;
    $title = 'Title ' . $i;
    $content = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Urna duis convallis convallis tellus. Mauris augue neque gravida in fermentum. Id consectetur purus ut faucibus pulvinar. Eget magna fermentum iaculis eu non diam. Sed vulputate odio ut enim blandit volutpat. Augue interdum velit euismod in. Augue eget arcu dictum varius duis at consectetur. Condimentum lacinia quis vel eros. Vitae suscipit tellus mauris a diam maecenas sed enim. Donec pretium vulputate sapien nec. Tortor posuere ac ut consequat semper viverra nam. At urna condimentum mattis pellentesque id nibh tortor id.

Placerat duis ultricies lacus sed turpis tincidunt id aliquet risus. Libero volutpat sed cras ornare. Cursus eget nunc scelerisque viverra mauris in aliquam sem fringilla. Adipiscing tristique risus nec feugiat in fermentum posuere urna. Est ullamcorper eget nulla facilisi. Amet nisl suscipit adipiscing bibendum est ultricies integer quis auctor. Mauris commodo quis imperdiet massa tincidunt nunc pulvinar sapien et. At elementum eu facilisis sed odio morbi. Amet purus gravida quis blandit. Elementum nisi quis eleifend quam adipiscing vitae proin. Pellentesque nec nam aliquam sem et tortor.

Scelerisque eu ultrices vitae auctor. Diam vel quam elementum pulvinar etiam non quam lacus suspendisse. Ultricies mi quis hendrerit dolor magna eget est lorem ipsum. Massa sed elementum tempus egestas sed sed risus pretium. Enim eu turpis egestas pretium aenean pharetra magna ac. Porttitor lacus luctus accumsan tortor posuere ac ut. Sociis natoque penatibus et magnis dis. Ac turpis egestas sed tempus urna et pharetra pharetra. Nunc sed blandit libero volutpat sed cras. Augue interdum velit euismod in pellentesque massa placerat duis. Quam pellentesque nec nam aliquam sem et tortor. Pharetra pharetra massa massa ultricies. Laoreet suspendisse interdum consectetur libero id faucibus. Vestibulum rhoncus est pellentesque elit ullamcorper dignissim cras tincidunt lobortis. Id cursus metus aliquam eleifend mi in nulla.';
    $image = '/images/image.png';
    $publishdate = 'Date' . $i;
    $hidden = 0;
    $query = "INSERT INTO articles VALUES (0,?,?,?,?,?,?)";
    $stmt = $mysqli->prepare($query) or die ('1');
    $stmt->bind_param('ssssss',$author,$title,$content,$image,$publishdate,$hidden) or die ('2');
    $stmt->execute() or die ('3');

}
function empty_table(){
    $mysqli = connect();
    $query = 'TRUNCATE table articles';
    $stmt = $mysqli->prepare($query);
    $stmt->execute();
}



