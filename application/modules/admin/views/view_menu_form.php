<div class="main-content">
	<div class="main-content-inner">
		<div class="breadcrumbs ace-save-state" id="breadcrumbs">
			<ul class="breadcrumb">
				<li>
					<i class="ace-icon fa fa-home home-icon"></i>
					<a href="<?php echo base_url();?>aparatur">Home</a>
				</li>
				<li>Menu</li>
				<li><?php echo $button;?></li>
			</ul>
		</div>
		<div class="page-content">
			<div class="page-header">
				<h1></h1>
			</div>
			<div class="page-content">
				<form action="<?php echo $action; ?>" method="post">
					<table class='table'>
						<tr>
							<td width="120">Name <?php echo form_error('name') ?></td>
							<td><input type="text" class="form-control" name="name" id="name" placeholder="Name" value="<?php echo $name; ?>" /></td>
						<tr>
							<td>Link <?php echo form_error('link') ?></td>
							<td><input type="text" class="form-control" name="link" id="link" placeholder="Link" value="<?php echo $link; ?>" /></td>
						<tr>
							<td>Icon <?php echo form_error('icon') ?></td>
							<td><input type="text" class="form-control" name="icon" id="icon" placeholder="Icon" value="<?php echo $icon; ?>" /></td>
						<tr>
							<td>Is Active <?php echo form_error('is_active') ?></td>
							<td><?php echo form_dropdown('is_active',array('1'=>'AKTIF','0'=>'TIDAK AKTIF'),$is_active,"class='form-control'");?></td>
						<tr>
							<td>Is Parent <?php echo form_error('is_parent') ?></td>
							<td>
								<select name="is_parent" class="form-control">
									<option value="0">YA</option>
									<?php
									$menu = $this->db->get('menu');
									foreach ($menu->result() as $m){
										echo "<option value='$m->id' ";
										echo $m->id==$is_parent?'selected':'';
										echo">".  strtoupper($m->name)."</option>";
									}
									?>
								</select>
							</td>
							<input type="hidden" name="id" value="<?php echo $id; ?>" /> 
						<tr>
							<td colspan='2'>
								<button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
								<a href="<?php echo site_url('menu') ?>" class="btn btn-default">Cancel</a>
							</td>
						</tr>				
					</table>
				</form>
			</div>
		</div>
	</div>
	
</div>