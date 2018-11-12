@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')
	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">Home</div>

					<div class="panel-body">


                            <div id="calendar" class="fc fc-unthemed fc-ltr"><div class="fc-toolbar fc-header-toolbar"><div class="fc-left"><div class="fc-button-group"><button type="button" class="fc-prev-button fc-button fc-state-default fc-corner-left" aria-label="prev"><span class="fc-icon fc-icon-left-single-arrow"></span></button><button type="button" class="fc-next-button fc-button fc-state-default fc-corner-right" aria-label="next"><span class="fc-icon fc-icon-right-single-arrow"></span></button></div><button type="button" class="fc-today-button fc-button fc-state-default fc-corner-left fc-corner-right"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">hoje</font></font></button></div><div class="fc-right"><div class="fc-button-group"><button type="button" class="fc-month-button fc-button fc-state-default fc-corner-left fc-state-active"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">mês</font></font></button><button type="button" class="fc-agendaWeek-button fc-button fc-state-default"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">semana</font></font></button><button type="button" class="fc-agendaDay-button fc-button fc-state-default fc-corner-right"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">dia</font></font></button></div></div><div class="fc-center"><h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Outubro de 2018</font></font></h2></div><div class="fc-clear"></div></div><div class="fc-view-container" style=""><div class="fc-view fc-month-view fc-basic-view" style=""><table class=""><thead class="fc-head"><tr><td class="fc-head-container fc-widget-header"><div class="fc-row fc-widget-header"><table class=""><thead><tr><th class="fc-day-header fc-widget-header fc-sun"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Dom</font></font></span></th><th class="fc-day-header fc-widget-header fc-mon"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">seg</font></font></span></th><th class="fc-day-header fc-widget-header fc-tue"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ter</font></font></span></th><th class="fc-day-header fc-widget-header fc-wed"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">qua</font></font></span></th><th class="fc-day-header fc-widget-header fc-thu"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">qui</font></font></span></th><th class="fc-day-header fc-widget-header fc-fri"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Sex</font></font></span></th><th class="fc-day-header fc-widget-header fc-sat"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Sentou</font></font></span></th></tr></thead></table></div></td></tr></thead><tbody class="fc-body"><tr><td class="fc-widget-content"><div class="fc-scroller fc-day-grid-container" style="overflow: hidden; height: 373px;"><div class="fc-day-grid fc-unselectable"><div class="fc-row fc-week fc-widget-content" style="height: 60px;"><div class="fc-bg"><table class=""><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-other-month fc-past" data-date="2018-09-30"></td><td class="fc-day fc-widget-content fc-mon fc-past" data-date="2018-10-01"></td><td class="fc-day fc-widget-content fc-tue fc-past" data-date="2018-10-02"></td><td class="fc-day fc-widget-content fc-wed fc-past" data-date="2018-10-03"></td><td class="fc-day fc-widget-content fc-thu fc-past" data-date="2018-10-04"></td><td class="fc-day fc-widget-content fc-fri fc-past" data-date="2018-10-05"></td><td class="fc-day fc-widget-content fc-sat fc-past" data-date="2018-10-06"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-other-month fc-past" data-date="2018-09-30"><span class="fc-day-number"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">30</font></font></span></td><td class="fc-day-top fc-mon fc-past" data-date="2018-10-01"><span class="fc-day-number"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1</font></font></span></td><td class="fc-day-top fc-tue fc-past" data-date="2018-10-02"><span class="fc-day-number"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2</font></font></span></td><td class="fc-day-top fc-wed fc-past" data-date="2018-10-03"><span class="fc-day-number"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">3</font></font></span></td><td class="fc-day-top fc-thu fc-past" data-date="2018-10-04"><span class="fc-day-number"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">4</font></font></span></td><td class="fc-day-top fc-fri fc-past" data-date="2018-10-05"><span class="fc-day-number"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">5</font></font></span></td><td class="fc-day-top fc-sat fc-past" data-date="2018-10-06"><span class="fc-day-number"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">6</font></font></span></td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content" style="height: 60px;"><div class="fc-bg"><table class=""><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-past" data-date="2018-10-07"></td><td class="fc-day fc-widget-content fc-mon fc-past" data-date="2018-10-08"></td><td class="fc-day fc-widget-content fc-tue fc-past" data-date="2018-10-09"></td><td class="fc-day fc-widget-content fc-wed fc-past" data-date="2018-10-10"></td><td class="fc-day fc-widget-content fc-thu fc-past" data-date="2018-10-11"></td><td class="fc-day fc-widget-content fc-fri fc-past" data-date="2018-10-12"></td><td class="fc-day fc-widget-content fc-sat fc-past" data-date="2018-10-13"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-past" data-date="2018-10-07"><span class="fc-day-number"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">7</font></font></span></td><td class="fc-day-top fc-mon fc-past" data-date="2018-10-08"><span class="fc-day-number"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">8</font></font></span></td><td class="fc-day-top fc-tue fc-past" data-date="2018-10-09"><span class="fc-day-number"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">9</font></font></span></td><td class="fc-day-top fc-wed fc-past" data-date="2018-10-10"><span class="fc-day-number"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">10</font></font></span></td><td class="fc-day-top fc-thu fc-past" data-date="2018-10-11"><span class="fc-day-number"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">11</font></font></span></td><td class="fc-day-top fc-fri fc-past" data-date="2018-10-12"><span class="fc-day-number"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">12</font></font></span></td><td class="fc-day-top fc-sat fc-past" data-date="2018-10-13"><span class="fc-day-number"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">13</font></font></span></td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content" style="height: 60px;"><div class="fc-bg"><table class=""><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-past" data-date="2018-10-14"></td><td class="fc-day fc-widget-content fc-mon fc-past" data-date="2018-10-15"></td><td class="fc-day fc-widget-content fc-tue fc-past" data-date="2018-10-16"></td><td class="fc-day fc-widget-content fc-wed fc-past" data-date="2018-10-17"></td><td class="fc-day fc-widget-content fc-thu fc-past" data-date="2018-10-18"></td><td class="fc-day fc-widget-content fc-fri fc-past" data-date="2018-10-19"></td><td class="fc-day fc-widget-content fc-sat fc-past" data-date="2018-10-20"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-past" data-date="2018-10-14"><span class="fc-day-number"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">14</font></font></span></td><td class="fc-day-top fc-mon fc-past" data-date="2018-10-15"><span class="fc-day-number"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">15</font></font></span></td><td class="fc-day-top fc-tue fc-past" data-date="2018-10-16"><span class="fc-day-number"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">16</font></font></span></td><td class="fc-day-top fc-wed fc-past" data-date="2018-10-17"><span class="fc-day-number"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">17</font></font></span></td><td class="fc-day-top fc-thu fc-past" data-date="2018-10-18"><span class="fc-day-number"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">18</font></font></span></td><td class="fc-day-top fc-fri fc-past" data-date="2018-10-19"><span class="fc-day-number"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">19</font></font></span></td><td class="fc-day-top fc-sat fc-past" data-date="2018-10-20"><span class="fc-day-number"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">20</font></font></span></td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content" style="height: 60px;"><div class="fc-bg"><table class=""><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-past" data-date="2018-10-21"></td><td class="fc-day fc-widget-content fc-mon fc-past" data-date="2018-10-22"></td><td class="fc-day fc-widget-content fc-tue fc-past" data-date="2018-10-23"></td><td class="fc-day fc-widget-content fc-wed fc-past" data-date="2018-10-24"></td><td class="fc-day fc-widget-content fc-thu fc-past" data-date="2018-10-25"></td><td class="fc-day fc-widget-content fc-fri fc-past" data-date="2018-10-26"></td><td class="fc-day fc-widget-content fc-sat fc-past" data-date="2018-10-27"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-past" data-date="2018-10-21"><span class="fc-day-number"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">21</font></font></span></td><td class="fc-day-top fc-mon fc-past" data-date="2018-10-22"><span class="fc-day-number"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">22</font></font></span></td><td class="fc-day-top fc-tue fc-past" data-date="2018-10-23"><span class="fc-day-number"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">23</font></font></span></td><td class="fc-day-top fc-wed fc-past" data-date="2018-10-24"><span class="fc-day-number"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">24</font></font></span></td><td class="fc-day-top fc-thu fc-past" data-date="2018-10-25"><span class="fc-day-number"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">25</font></font></span></td><td class="fc-day-top fc-fri fc-past" data-date="2018-10-26"><span class="fc-day-number"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">26</font></font></span></td><td class="fc-day-top fc-sat fc-past" data-date="2018-10-27"><span class="fc-day-number"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">27</font></font></span></td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content" style="height: 61px;"><div class="fc-bg"><table class=""><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-past" data-date="2018-10-28"></td><td class="fc-day fc-widget-content fc-mon fc-past" data-date="2018-10-29"></td><td class="fc-day fc-widget-content fc-tue fc-past" data-date="2018-10-30"></td><td class="fc-day fc-widget-content fc-wed fc-past" data-date="2018-10-31"></td><td class="fc-day fc-widget-content fc-thu fc-other-month fc-past" data-date="2018-11-01"></td><td class="fc-day fc-widget-content fc-fri fc-other-month fc-past" data-date="2018-11-02"></td><td class="fc-day fc-widget-content fc-sat fc-other-month fc-past" data-date="2018-11-03"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-past" data-date="2018-10-28"><span class="fc-day-number"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">28</font></font></span></td><td class="fc-day-top fc-mon fc-past" data-date="2018-10-29"><span class="fc-day-number"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">29</font></font></span></td><td class="fc-day-top fc-tue fc-past" data-date="2018-10-30"><span class="fc-day-number"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">30</font></font></span></td><td class="fc-day-top fc-wed fc-past" data-date="2018-10-31"><span class="fc-day-number"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">31</font></font></span></td><td class="fc-day-top fc-thu fc-other-month fc-past" data-date="2018-11-01"><span class="fc-day-number"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1</font></font></span></td><td class="fc-day-top fc-fri fc-other-month fc-past" data-date="2018-11-02"><span class="fc-day-number"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2</font></font></span></td><td class="fc-day-top fc-sat fc-other-month fc-past" data-date="2018-11-03"><span class="fc-day-number"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">3</font></font></span></td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable" style="background-color:#f56954;border-color:#f56954"><div class="fc-content"><span class="fc-time"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">12a </font></font></span> <span class="fc-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">All Day Event</font></font></span></div></a></td><td></td><td></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content" style=""><div class="fc-bg"><table class=""><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-other-month fc-past" data-date="2018-11-04"></td><td class="fc-day fc-widget-content fc-mon fc-other-month fc-past" data-date="2018-11-05"></td><td class="fc-day fc-widget-content fc-tue fc-other-month fc-past" data-date="2018-11-06"></td><td class="fc-day fc-widget-content fc-wed fc-other-month fc-past" data-date="2018-11-07"></td><td class="fc-day fc-widget-content fc-thu fc-other-month fc-past" data-date="2018-11-08"></td><td class="fc-day fc-widget-content fc-fri fc-other-month fc-past" data-date="2018-11-09"></td><td class="fc-day fc-widget-content fc-sat fc-other-month fc-today " data-date="2018-11-10"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-other-month fc-past" data-date="2018-11-04"><span class="fc-day-number"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">4</font></font></span></td><td class="fc-day-top fc-mon fc-other-month fc-past" data-date="2018-11-05"><span class="fc-day-number"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">5</font></font></span></td><td class="fc-day-top fc-tue fc-other-month fc-past" data-date="2018-11-06"><span class="fc-day-number"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">6</font></font></span></td><td class="fc-day-top fc-wed fc-other-month fc-past" data-date="2018-11-07"><span class="fc-day-number"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">7</font></font></span></td><td class="fc-day-top fc-thu fc-other-month fc-past" data-date="2018-11-08"><span class="fc-day-number"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">8</font></font></span></td><td class="fc-day-top fc-fri fc-other-month fc-past" data-date="2018-11-09"><span class="fc-day-number"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">9</font></font></span></td><td class="fc-day-top fc-sat fc-other-month fc-today " data-date="2018-11-10"><span class="fc-day-number"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">10</font></font></span></td></tr></thead><tbody><tr><td rowspan="2"></td><td class="fc-event-container" colspan="3"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable" style="background-color:#f39c12;border-color:#f39c12"><div class="fc-content"><span class="fc-time"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">12a </font></font></span> <span class="fc-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Long Event</font></font></span></div></a></td><td rowspan="2"></td><td rowspan="2"></td><td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable" style="background-color:#0073b7;border-color:#0073b7"><div class="fc-content"><span class="fc-time"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">10: 30a </font></font></span> <span class="fc-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Reunião</font></font></span></div></a></td></tr><tr><td></td><td></td><td></td><td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable" style="background-color:#00c0ef;border-color:#00c0ef"><div class="fc-content"><span class="fc-time"><font style="vertical-align: inherit;"></font></span> <font style="vertical-align: inherit;"><span class="fc-title"><font style="vertical-align: inherit;">Almoço </font></span><span class="fc-time"><font style="vertical-align: inherit;">12p</font></span></font><span class="fc-title"><font style="vertical-align: inherit;"></font></span></div></a></td></tr></tbody></table></div></div></div></div></td></tr></tbody></table></div></div></div>



                        </div>
				</div>
			</div>
		</div>
	</div>
@endsection