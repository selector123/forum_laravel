<div class="admincontent">
<br>
	<a href="{{ url('admin/create') }}"><button class="btn btn-default">Добавить тему</button></a><br><br>
</div>
<div class="admincontent">
	<?php $count = count($result);
			$count++; ?>
	<?php for($i = 1;$i<$count;$i++){
		echo '<center>';
		echo '<table class="admincattable">';
		echo '<caption class="admincatcaption">';
		$j = $i;
		$j--;
		echo $rescat[$j]['name'];
		echo '</caption>';
		echo '<tr class=""><th class="headinside">
							Категория:
						</th><th class="headinside">Статус темы:</th><th class="headinside">Имя темы:</th><th class="headinside">Автор темы:</th><th class="headinside">Изменить тему:</th><th class="headinside">Удалить тему:</th></tr>';
			foreach ($result[$i] as $resultitem){
				echo '<tr>';
				if ($resultitem['close'] == 0) {
					$resultitem['close'] = 'Закрытая';
				} else{
					$resultitem['close'] = 'Открытая';
				}
				echo '<td class="catinside">'.$resultitem['section'].'</td>';
				echo '<td class="catinside">'.$resultitem['close'].'</td>';
				echo '<td class="catinside">'.$resultitem['name'].'</td>';
				echo '<td class="catinside">'.$resultitem['author'].'</td>';
				echo '<td class="catinside"><a href="';
				echo '/admin/edit/'.$resultitem['id'];;
				echo '"><button class="btn btn-default">Изменить тему</button></a></td>';
				echo '<td class="catinside"><a href="';echo '/admin/delete/'.$resultitem['id']; 
				echo '"><button class="btn btn-default">Удалить тему</button></a></td>';
				echo '</tr>';
				continue;
			}
			echo '</table></center><br><br>';
		}?>
</div>