<?php
class ViewComments {

    public static function CommentsForm() {
        echo '<form action="insertcomment">
        <input type="hidden" name="id" value="'.$_GET['id'].'">
        Your comment: <input type="text" name="comment">
        <input type="submit" value="Send"> </form>';
    
        }

public static function CommentsByProducts ($arr) {
    if($arr!=null) {
    echo '<table id="ctable"><th>Comment</th><th>Date</th>';
    foreach($arr as $value) {
        echo '<tr><td>'.$value['text']."</td><td>".$value['date']."</td></tr>";
    }
    echo '</table>';
    }
}

public static function CommentsCountWithAncor ($value) {
    if ($value['count']>0)
    echo '<b><a href="#ctable"/> ('.$value['count'].') </a></b>';
    }
public static function CommentsCount($value) {
    if ($value['count']>0) {
        echo '<b><font color="gold" style = "text-shadow: 1px 1px 1px #000020;">('.$value['count'].') </font></b>';
    }
}

}//end class 