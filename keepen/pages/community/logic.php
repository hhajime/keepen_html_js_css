<?php
        // board테이블에서 idx를 기준으로 내림차순해서 10개까지 표시
          $sql = query("select * from board order by idx desc limit 0,10"); 
            while($board = $sql->fetch_array())
            {
              //title변수에 DB에서 가져온 title을 선택
              $title=$board["title"]; 
              if(strlen($title)>30)
              { 
                //title이 30을 넘어서면 ...표시
                $title=str_replace($board["title"],mb_substr($board["title"],0,30,"utf-8")."...",$board["title"]);
              }
        ?>

<tbody>
        <tr>
          <td width="70"><?php echo $board['idx']; ?></td>
          <td width="500"><a href=""><?php echo $title;?></a></td>
          <td width="120"><?php echo $board['name']?></td>
          <td width="100"><?php echo $board['date']?></td>
          <td width="100"><?php echo $board['hit']; ?></td>
          <!-- 추천수 표시해주기 위해 추가한 부분 -->
          <td width="100"><?php echo $board['thumbup']?></td>
        </tr>
      </tbody>

<?php
}
?>