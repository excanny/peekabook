<?= $this->extend('layouts/master2') ?>

<?= $this->section('content') ?>



        <div class="row small-spacing">
				<div class="col-12">
					<div class="box-content">
						<h4 class="box-title">My Books</h4>
						<!-- /.dropdown js__dropdown -->
						<div class="table-responsive">
						<table id="example" class="table table-striped table-bordered display datatable text-center" style="width:100%">
							<thead>
								<tr>
                                    <th>Book Title</th>
                                    <th>Price</th>
									<th>Pages</th>
									<th>Action</th>
									
								</tr>
							</thead>
							<tfoot>
								<tr>
                                    <th>Book Title</th>
                                    <th>Price</th>
									<th>Pages</th>
									<th>Action</th>
								</tr>
							</tfoot>
							<tbody>
                                <?php foreach ($my_books as $book) { ?>
                     
                                    <tr>
                                        <td><?php echo $book['ftitle']; ?></td>
                                        <td><?php echo $book['fprice']; ?></td>
                                        <td><?php echo $book['fnumber_of_pages']; ?></td>
                                        <td><a href="<?php echo site_url('dashboard/book/' . $book['fbook_slug']); ?>"><i class="fa fa-eye"></i</a></td>
                                        
                                    </tr>

                                <?php } ?>
							</tbody>
						</table>
						</div>
					</div>
					<!-- /.box-content -->
				</div>
				<!-- /.col-12 -->
			
			</div>


<?= $this->endSection() ?>