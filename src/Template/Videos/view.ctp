<section class="content-header">
  <h1>
    Video
    <small><?php echo __('View'); ?></small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?php echo $this->Url->build(['action' => 'index']); ?>"><i class="fa fa-dashboard"></i> <?php echo __('Home'); ?></a></li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box box-solid">
        <div class="box-header with-border">
          <i class="fa fa-info"></i>
          <h3 class="box-title"><?php echo __('Information'); ?></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <dl class="dl-horizontal">
            <dt scope="row"><?= __('Title') ?></dt>
            <dd><?= h($video->title) ?></dd>
            <dt scope="row"><?= __('Link') ?></dt>
            <dd><?= h($video->link) ?></dd>
            <dt scope="row"><?= __('Capa') ?></dt>
            <dd><?= h($video->capa) ?></dd>
            <dt scope="row"><?= __('Capa Dir') ?></dt>
            <dd><?= h($video->capa_dir) ?></dd>
            <dt scope="row"><?= __('Id') ?></dt>
            <dd><?= $this->Number->format($video->id) ?></dd>
            <dt scope="row"><?= __('Created') ?></dt>
            <dd><?= h($video->created) ?></dd>
            <dt scope="row"><?= __('Modified') ?></dt>
            <dd><?= h($video->modified) ?></dd>
          </dl>
        </div>
      </div>
    </div>
  </div>

</section>
