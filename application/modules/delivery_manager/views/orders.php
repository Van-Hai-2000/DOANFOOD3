<div id="page-wrapper">


            <div class="row">

                <div class="col-md-12">

				

					<!-- Advanced Tables -->

                    <div class="panel panel-default">

                        <div class="panel-heading">

                             <?php if(!empty($pagetitle)) echo $pagetitle;?>

                        </div>

                        <div class="panel-body">

                            <div class="table-responsive">

							

			<?php echo $this->session->flashdata('message'); ?>



			<table id="example" class="display responsive nowrap" width="100%" cellspacing="0">

			  	<thead>

					<tr>

						<th><?php echo get_languageword('STT');?></th>

						<th><?php echo get_languageword('Mã');?></th>

						<th><?php echo get_languageword('Ngày tháng');?></th>

						<th><?php echo get_languageword('Thời gian');?></th>

						<th><?php echo get_languageword('Giá');?></th>

						<th><?php echo get_languageword('Tên khách hàng');?></th>

						<th><?php echo get_languageword('SDT');?></th>

						<th><?php echo get_languageword('Địa chỉ');?></th>

						<th><?php echo get_languageword('Trạng thái');?></th>

						<th><?php echo get_languageword('Hành động');?></th>

					</tr>

				</thead>



				<tfoot>

					<tr>

						<th><?php echo get_languageword('s_no');?></th>

						<th><?php echo get_languageword('order_no');?></th>

						<th><?php echo get_languageword('order_date');?></th>

						<th><?php echo get_languageword('order_time');?></th>

						<th><?php echo get_languageword('order_cost');?></th>

						<th><?php echo get_languageword('customer_name');?></th>

						<th><?php echo get_languageword('phone');?></th>

						<th><?php echo get_languageword('address');?></th>

						<th><?php echo get_languageword('status');?></th>

						<th><?php echo get_languageword('actions');?></th>

					</tr>

				</tfoot>



				<tbody>



				</tbody>

			</table>

			</div>

			</div>

			</div>

		 </div>

                        </div>

                  

                    <!--End Advanced Tables -->

                </div>