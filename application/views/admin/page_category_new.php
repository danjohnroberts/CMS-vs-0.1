<div class="row">
   <div class="large-6 columns panel" style="width: 700px;">
      <ul class="breadcrumbs">
         <li><a href="<?PHP echo base_url(); ?>admin">Admin Home</a></li>
         <li><a href="<?PHP echo base_url(); ?>admin/page-categories">Main Page List</a></li>
         <li class="current"><a href="#">New Main Page </a></li>
      </ul>
      <H3> Create New Main Page </H3>
      <hr/>
      <div class="error"> <?php echo validation_errors(); ?>
         <?php echo $error; ?>
      </div>
      <?php 
         $attributes = array('class' => 'email', 'id' => 'form');
         
         echo form_open_multipart(base_url().'admin/new-page-category',  $attributes);
         
         ?>
      <label for="title" >Title</label> <br />
      <input name="title" for="title" type="text"  size="100">
      <hr />
      <label for="text">Content</label>
      <br />
      <textarea  name="content" rows="15" cols="80" ></textarea>
      <br />
      <input class="radius button" name="New Main Page " type="submit" id="New Page Category" value="New Main Page "  />
      </form>
      <hr />
   </div>
   <div class="large-6 columns panel">
      <ul class="side-nav">
         <li><a href="<?PHP echo base_url(); ?>admin/new-page-category">New Main Page</a></li>
         <li><a href="<?PHP echo base_url(); ?>admin/new-page">New Sub-Page</a></li>
      </ul>
   </div>
</div>
</div>