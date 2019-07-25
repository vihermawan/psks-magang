@extends('layouts.main')
@section('content')

<?php
    $psks = DB::table('psks')
                 ->select('psks.*')
                 ->get();

    $profesi = DB::table('jenispsks')
                 ->select('jenispsks.*')
                 ->get();
    $keluarga = DB::table('keluarga_terdamping')
                ->select('keluarga_terdamping.*')
                ->get();
    $diklat = DB::table('diklat')
              ->select('diklat.*')
              ->get();
    ?> 


<div class="content">
     <!-- Content Row -->
   <div class="card-body">
          <div class="row">

            <div class="col-xl-4 col-md-6">
              <div class="card border-left-primary py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="font-weight-bold text-primary text-uppercase mb-1">Total Data yang Masuk</div>
                      <div class="h2 mb-0 font-weight-bold text-gray-800">0</div>
                    </div>
                    <div class="col-auto">
                      <i class="icon-stats-dots icon-2x opacity-50 mr-2"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-4 col-md-6">
              <div class="card border-left-success py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total PSKS</div>
                      <div class="h2 mb-0 font-weight-bold text-gray-800">{{count($psks)}}</div>
                    </div>
                    <div class="col-auto">
                      <i class="icon-calendar22 icon-2x opacity-50 mr-2"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-4 col-md-6">
              <div class="card border-left-warning py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Total Profesi PSKS</div>
                      <div class="h2 mb-0 font-weight-bold text-gray-800">{{count($profesi)}}</div>
                    </div>
                    <div class="col-auto">
                      <i class="icon-users4 icon-2x opacity-50 mr-2"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="card">
            <div class="card-header header-elements-inline">
				<h5 class="card-title">Rekap Data PSKS</h5>
				<div class="header-elements">
					<div class="list-icons">
		                <a class="list-icons-item" data-action="collapse"></a>
		                <a class="list-icons-item" data-action="reload"></a>
		                <a class="list-icons-item" data-action="remove"></a>
		            </div>
	            </div>
			</div>

			<div class="card-body">
                <div class="chart-container">
					<div class="chart has-fixed-height" id="columns_basic"></div>
				</div>
			</div>
        </div>      
    </div>
</div>


  

       

@endsection
@section('js')    
	<script src="{{url('/')}}/template/global_assets/js/plugins/tables/datatables/datatables.min.js"></script>
	<script src="{{url('/')}}/template/global_assets/js/demo_pages/datatables_basic.js"></script>
    <script src="{{url('/')}}/template/global_assets/js/plugins/visualization/echarts/echarts.min.js"></script>
    <script>

      var EchartsColumnsWaterfalls = function() {


      // Column and waterfall charts
      var _columnsWaterfallsExamples = function() {
          if (typeof echarts == 'undefined') {
              console.warn('Warning - echarts.min.js is not loaded.');
              return;
          }

          // Define elements
          var columns_basic_element = document.getElementById('columns_basic');
          var columns_stacked_element = document.getElementById('columns_stacked');
          var columns_thermometer_element = document.getElementById('columns_thermometer');
          var columns_clustered_element = document.getElementById('columns_clustered');
          var columns_compositive_waterfall_element = document.getElementById('columns_compositive_waterfall');
          var columns_change_waterfall_element = document.getElementById('columns_change_waterfall');
          var columns_timeline_element = document.getElementById('columns_timeline');


          //
          // Charts configuration
          //

          // Basic columns chart
          if (columns_basic_element) {

              // Initialize chart
              var columns_basic = echarts.init(columns_basic_element);


              //
              // Chart config
              //

              // Options
              columns_basic.setOption({

                  // Define colors
                  color: ['#2ec7c9','#b6a2de','#5ab1ef','#ffb980','#d87a80'],

                  // Global text styles
                  textStyle: {
                      fontFamily: 'Roboto, Arial, Verdana, sans-serif',
                      fontSize: 13
                  },

                  // Chart animation duration
                  animationDuration: 750,

                  // Setup grid
                  grid: {
                      left: 0,
                      right: 40,
                      top: 35,
                      bottom: 0,
                      containLabel: true
                  },

                  // Add legend
                  legend: {
                      data: ['Diklat yang diikuti','Keluarga yang Didampingi'],
                      itemHeight: 8,
                      itemGap: 20,
                      textStyle: {
                          padding: [0, 5]
                      }
                  },

                  // Add tooltip
                  tooltip: {
                      trigger: 'axis',
                      backgroundColor: 'rgba(0,0,0,0.75)',
                      padding: [10, 15],
                      textStyle: {
                          fontSize: 13,
                          fontFamily: 'Roboto, sans-serif'
                      }
                  },

                  // Horizontal axis
                  xAxis: [{
                      type: 'category',
                      data: {!!json_encode($categories)!!},
                      axisLabel: {
                          color: '#333'
                      },
                      axisLine: {
                          lineStyle: {
                              color: '#999'
                          }
                      },
                      splitLine: {
                          show: true,
                          lineStyle: {
                              color: '#eee',
                              type: 'dashed'
                          }
                      }
                  }],

                  // Vertical axis
                  yAxis: [{
                      type: 'value',
                      axisLabel: {
                          color: '#333'
                      },
                      axisLine: {
                          lineStyle: {
                              color: '#999'
                          }
                      },
                      splitLine: {
                          lineStyle: {
                              color: ['#eee']
                          }
                      },
                      splitArea: {
                          show: true,
                          areaStyle: {
                              color: ['rgba(250,250,250,0.1)', 'rgba(0,0,0,0.01)']
                          }
                      }
                  }],

                  // Add series
                  series: [
                      {
                          name: 'Diklat yang diikuti',
                          type: 'bar',
                          data: {!!json_encode($datadiklat)!!},
                          itemStyle: {
                              normal: {
                                  label: {
                                      show: true,
                                      position: 'top',
                                      textStyle: {
                                          fontWeight: 500
                                      }
                                  }
                              }
                          },
                          markLine: {
                              data: [{type: 'average', name: 'Average'}]
                          }
                      },
                    {
                        name: 'Keluarga yang Didampingi',
                        type: 'bar',
                        data: {!!json_encode($datakeluargaterdamping)!!},
                        itemStyle: {
                            normal: {
                                label: {
                                    show: true,
                                    position: 'top',
                                    textStyle: {
                                        fontWeight: 500
                                    }
                                }
                            }
                        },
                        markLine: {
                            data: [{type: 'average', name: 'Average'}]
                        }
                    }
                      
                  ]
              });
          }

          // Resize function
          var triggerChartResize = function() {
              columns_basic_element && columns_basic.resize();
              columns_stacked_element && columns_stacked.resize();
              columns_thermometer_element && columns_thermometer.resize();
              columns_clustered_element && columns_clustered.resize();
              columns_compositive_waterfall_element && columns_compositive_waterfall.resize();
              columns_change_waterfall_element && columns_change_waterfall.resize();
              columns_timeline_element && columns_timeline.resize();
          };

          // On sidebar width change
          $(document).on('click', '.sidebar-control', function() {
              setTimeout(function () {
                  triggerChartResize();
              }, 0);
          });

          // On window resize
          var resizeCharts;
          window.onresize = function () {
              clearTimeout(resizeCharts);
              resizeCharts = setTimeout(function () {
                  triggerChartResize();
              }, 200);
          };
      };

      return {
          init: function() {
              _columnsWaterfallsExamples();
          }
      }
      }();


      // Initialize module
      // ------------------------------

      document.addEventListener('DOMContentLoaded', function() {
      EchartsColumnsWaterfalls.init();
      });

   </script>
@endsection