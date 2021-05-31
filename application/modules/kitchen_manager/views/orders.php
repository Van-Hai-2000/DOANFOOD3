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

						<th><?php echo get_languageword('Ngày');?></th>

						<th><?php echo get_languageword('Giờ');?></th>

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

						<th><?php echo get_languageword('STT');?></th>

						<th><?php echo get_languageword('Mã');?></th>

						<th><?php echo get_languageword('Ngày');?></th>

						<th><?php echo get_languageword('Giờ');?></th>

						<th><?php echo get_languageword('Giá');?></th>

						<th><?php echo get_languageword('Tên khách hàng');?></th>

						<th><?php echo get_languageword('SDT');?></th>

						<th><?php echo get_languageword('Địa chỉ');?></th>

						<th><?php echo get_languageword('Trạng thái');?></th>

						<th><?php echo get_languageword('Hành động');?></th>

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