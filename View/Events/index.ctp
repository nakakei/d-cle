<div id="sb-site">



<div class="row">
	<div class="col-md-12 col-xs-12">
		<div class="thumbnail">
			<div class="caption">
<?php 
	$this->Html->addCrumb('イベント一覧', '/events/index');
	echo $this->Html->getCrumbs(' > ', array(
    'url' => array('controller' => 'home', 'action' => 'index'),'escape' => false));
	
?>
			</div>
		</div>
	</div>
</div>


<div class="row">
	<div class="col-md-12 col-xs-12">
		<div class="thumbnail">
			<div class="caption">
			<h1>
            	【イベント一覧】
			</h1>
            <h3>カテゴリー検索</h3>
            <?php echo $this->Form->create(false, array(
			'action'=>'search','type'=>'get','class'=>'navbar-form navbar-left','role'=>'search',
			'inputDefaults' => array(
				'div' => 'form-group',
				'label' => array(
					'class' => 'col col-md-3 control-label'
				),
				'wrapInput' => 'col col-md-9',
				'class' => 'form-control'
			),
			'class' => 'well form-horizontal',
			//'type' => 'file'	
		)); ?>
			<?php echo $this->Form->input('eventcategory_id', array(
				'label' => array(
					'text' => 'カテゴリー選択'
				),
				'empty' => '選択してください',
				'options' => array(
					$eventcategories
				),
			)); ?>

    <div class="form-group">
		<div class="col col-md-9 col-md-offset-3">
			<?php echo $this->Form->submit('送信', array(
				'div' => false,
				'class' => 'btn btn-primary'
			)); ?>
		</div>
	</div>
<?php echo $this->Form->end(); ?>
            <hr />
            
            <div id="fc3" class="fc"></div>


    <script type="text/javascript">
    $(document).ready(function() {
        $('#fc3').fullCalendar({
            header: {
                    left: 'prev,next',
                    center: 'title',
                    right: 'month,agendaWeek,agendaDay'
                },
			axisFormat: "H:mm",
			timeFormat: { agenda: "H:mm{ - H:mm}", "": "H:mm" },
			columnFormat: { month: "ddd", week: "M月d日 ddd", day: "M月d日 dddd" },
			buttonText: { today: "今日", month: "月", week: "週", day: "日" },
			titleFormat: { month: "yyyy年 M月", week: "yyyy年 M月 d日{ - [ M月] d日}", day: "yyyy年 M月 d日 dddd" },
			monthNames: [ "1月", "2月", "3月", "4月", "5月", "6月", "7月", "8月", "9月", "10月", "11月", "12月" ],
			dayNamesShort: [ "日", "月", "火", "水", "木", "金", "土" ],
			dayNames: [ "日曜日", "月曜日", "火曜日", "水曜日", "木曜日", "金曜日", "土曜日" ],
			selectable: true,
			
			events: <?php echo $rows;?>,
        })
    });
    </script>            

			</div>
		</div>


	</div>
</div>

<div class="row">
	<div class="col-md-12 col-xs-12">
		<div class="thumbnail">
			<div class="caption">
			<h1>
            	近日のイベント一覧
			</h1>
	<table cellpadding="0" cellspacing="0" class="table">
	<tr>
			<th>イベント名</th>
			<th>場所</th>
			<th>日程</th>
			<th>団体名</th>
	</tr>
	<?php foreach ($events as $event): ?>
	<tr>
		<td><?php echo $this->Html->link($event['Event']['title'], array('controller' => 'events', 'action' => 'view', $event['Event']['id']));?>&nbsp;</td>
		<td><?php echo h($event['Event']['place']); ?>&nbsp;</td>
		<td><?php echo date("m/d H:i",strtotime($event['Event']['start'])).'～'; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($event['Club']['name'], array('controller' => 'clubs', 'action' => 'view', $event['Club']['id'])); ?>
		</td>
		<td>
		</td>
	</tr>
<?php endforeach; ?>
	</table>

			</div>
		</div>
	<ul class="pager col-xs-12">
		<?php
			echo $this->Paginator->prev('← ' . 'previous', array('class' => 'previous'), null, array('class' => 'previous'));
			echo $this->Paginator->numbers();
			echo $this->Paginator->next('next' . ' →', array('class' => 'next'), null, array('class' => 'next'));
		?>
	</ul>


	</div>
</div>

</div>

    
  



