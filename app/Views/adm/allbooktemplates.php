<?php

//$CI =&get_instance();

?>

<?= $this->extend('layouts/master3') ?>

<?= $this->section('content') ?>

<div class="content-wrapper">
<br>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      <?php if (session()->has('success') <> '') { ?>
            <div class="alert alert-dismissable alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <i class="ti ti-check"></i>&nbsp; <?php echo session()->getFlashdata("success"); ?> 
            </div>
        <?php } ?>

        <?php if (session()->has('error') <> '') { ?>

            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Sorry!</strong> <?php echo session()->getFlashdata("error"); ?>
            </div>
        <?php } ?>
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <div class="row">
                    <div class="col-sm-6">
                        <h3 class="card-title"> Book Templates</h3>
                    </div>
                    <div class="col-sm-6 text-right">
                       <a href="<?php echo site_url();?>adm/createbook">Add New</a> 
                    </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">

        <!-- /.dropdown js__dropdown -->
            <table class="datatable text-center table table-striped table-bordered table-sm">
            <thead>
                <tr>
                    <th>S/N</th>
                    <th>Title</th>
                    <th>Age Group</th>
                    <th>Price</th>
                    <th>Partner Email</th>
                    <th>Pages</th>
                    <th>Avatars</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; foreach($book_templates as $book){?>
                <tr>
                    <td><?php echo $i ?></td>
                    <td><?php echo $book['ftitle']; ?></td>
                   
                    <td><?php echo $book['fage_group']; ?></td>
                    <td><?php echo $book['fprice']; ?></td>
                    <td>
                        <?php 
                        if(empty($book['fpartner_email']))
                        {
                            echo "None";
                        }
                        else
                        {
                            echo $book['fpartner_email'];
                        }
                        ?>
                    </td>
                    <td>
                        <a href="<?php echo site_url('adm/bookcovers/'. $book['fbook_slug']);?>" class=""><small>Add Book Covers <?php //countpages($book['fbook_slug']);?></small></a>|
                        <a href="<?php echo site_url('adm/pages/'. $book['fbook_slug']);?>" class=""><small>Add Inner pages <?php //countpages($book['fbook_slug']);?></small></a>
                    </td>
                    <td>
                        <a href="<?php echo site_url('adm/avatars/'. $book['fbook_slug']);?>" class=""><small> Add Avatars</small></a>
                    </td>
                    <td>
                      <!--<a href="<?php //echo site_url('adm/flipbook/'. $book['fbook_slug']);?>" class="text-success"><i class="fa fa-eye"></i></a> -->
                       <a href="<?php echo site_url('adm/singlebooktemplate/'. $book['fbook_slug']);?>" class="text-warning"><i class="fa fa-edit"></i></a> 
                       <a href="<?php echo site_url('adm/deletebooktemplate/'. $book['fbook_slug']);?>" class="text-danger"><i class="fa fa-trash" onclick="return confirm('Are you sure you want to delete this book template?')"></i></a> 
                    </td>
                </tr>
                <?php $i++; } ?>
            </tbody>
        </table>
    </div>
    <!-- /.box-content -->
    
   </section>
</div>

<?= $this->endSection() ?>