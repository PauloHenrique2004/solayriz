<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Blog $blog
 */
?>

  <section class="content-header">
    <h1>
      Blog
      <small><?php echo __('Add'); ?></small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo $this->Url->build(['action' => 'index']); ?>"><i class="fa fa-dashboard"></i> <?php echo __('Home'); ?></a></li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title"><?php echo __('Form'); ?></h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          <?php echo $this->Form->create($blog, ['type' => 'file']); ?>
            <div class="box-body">
              <?php
                echo $this->Form->control('title');
                echo $this->Form->control('description', ['id' => 'editor']);
                echo $this->Form->control('signature');
                echo $this->Form->control('date');
                echo $this->Form->control('photo', ['type' => 'file']);
              ?>
            </div>
            <!-- /.box-body -->

          <?php echo $this->Form->submit(__('Submit')); ?>

          <?php echo $this->Form->end(); ?>
        </div>
        <!-- /.box -->
      </div>
  </div>
  <!-- /.row -->
      <?php $this->start('scriptBottom'); ?>
      <?php echo $this->Html->script([
          'ckeditor/ckeditor',
      ]); ?>
      <script>
          CKEDITOR.replace( 'editor' );
      </script>
      <?php  $this->end(); ?>
</section>
