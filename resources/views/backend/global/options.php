<?php
function getPagesOptionsRecursive($pages,$parent_id = 0,$char = '',$selected = 0)
{
    if($selected != 0){
        foreach ($pages as $key => $item)
        {
            if ($item['post_parent'] == $parent_id)
            {
                if($item['id'] == $selected){
                    echo '<option selected="selected" value="'.$item['id'].'">';
                }else{
                    echo '<option  value="'.$item['id'].'">';
                }
                echo $char . $item['post_name'];
                echo '</option>';
                unset($pages[$key]);
                getPagesOptionsRecursive($pages, $item['id'], $char.'---',$selected);
            }
        }
    }else{
        foreach ($pages as $key => $item)
        {
            if ($item['post_parent'] == $parent_id)
            {
                echo '<option value="'.$item['id'].'">';
                echo $char . $item['post_name'];
                echo '</option>';
                unset($pages[$key]);
                getPagesOptionsRecursive($pages, $item['id'], $char.'---');
            }
        }
    }
    
}

function getPagesTableRecursive($pages,$parent_id = 0,$char = '')
{
    if(!isset($_GET['search']) || empty($_GET['search'])){
        foreach ($pages as $key => $val)
        {
            if ($val['post_parent'] == $parent_id)
            {
                echo '<tr class="page-item-'.$val['id'].'">';
                    echo '<td class="text-center ">#'.$val['id'].'</td>';
                    echo '<td><a href="/fs/cpanel/pages/edit/'.$val['id'].'">'.$char.$val['post_name'].' </a></td>';
                    echo '<td class="text-center">'.($val['post_author'] == 1 ? 'admin' : ''). ' </td>';
                    echo '<td class="text-center">'.($val['post_status'] ? 'Bật' : 'Tắt').'</td>';
                    echo '<td class="text-center"><p>Cập nhật lần cuối </p>'.date("d-m-Y h:i:s", strtotime($val['updated_at'])).'</td>';
                    echo '<td class="text-center">';
                        echo '<div class="action-items">';
                        echo '<a href="/fs/cpanel/pages/edit/'.$val['id'].'"><i class="glyphicon glyphicon-pencil" aria-hidden="true"></i></a>';
                        echo '<a onclick="return deletePages('.$val['id'].')"><i class="glyphicon glyphicon-trash"></i>  </a>';
                        echo '</div>';
                    echo '</td>';
                echo '</tr>';
                unset($pages[$key]);
                getPagesTableRecursive($pages, $val['id'], $char.'—');
            }
        }
    }else{
        foreach ($pages as $key => $val)
        {
            echo '<tr class="page-item-'.$val['id'].'">';
                echo '<td class="text-center ">#'.$val['id'].'</td>';
                echo '<td><a href="/fs/cpanel/pages/edit/'.$val['id'].'">'.$char.$val['post_name'].' </a></td>';
                echo '<td class="text-center">'.($val['post_author'] == 1 ? 'admin' : ''). ' </td>';
                echo '<td class="text-center">'.($val['post_status'] ? 'Bật' : 'Tắt').'</td>';
                echo '<td class="text-center"><p>Cập nhật lần cuối </p>'.date("d-m-Y h:i:s", strtotime($val['updated_at'])).'</td>';
                echo '<td class="text-center">';
                    echo '<div class="action-items">';
                    echo '<a href="/fs/cpanel/pages/edit/'.$val['id'].'"><i class="glyphicon glyphicon-pencil" aria-hidden="true"></i></a>';
                    echo '<a onclick="return deletePages('.$val['id'].')"><i class="glyphicon glyphicon-trash"></i>  </a>';
                    echo '</div>';
                echo '</td>';
            echo '</tr>';
            unset($pages[$key]);
        }
    }

}