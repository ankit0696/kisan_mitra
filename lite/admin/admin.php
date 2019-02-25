<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Admin Panel</title>
  <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,200italic,300italic,400italic,600italic,700italic' rel='stylesheet' type='text/css'>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="https://threedubmedia.googlecode.com/files/jquery.event.drag-1.5.min.js" type="text/javascript"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  <link rel='stylesheet' href='http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css'>

      <link rel="stylesheet" href="css/admin.css">

  
</head>

<body>

  
<div class="panel-container">
  <div class="panel-controls" data-bind="css: {collapsed: collapsedNav}">
    <ul>
      <li class="nav-control" data-bind="click: collapse.bind($data)"><a><i class="fa fa-bars"></i></a></li>
      <li data-bind="css: {active: displayTab() === 'users'}, click: changeTab.bind($data, 'users')"><a><i class="fa fa-users"></i><span class="label">Users</span><i class="fa fa-caret-left caret"></i></a></li>
      <li data-bind="css: {active: displayTab() === 'documents'}, click: changeTab.bind($data, 'documents')"><a><i class="fa fa-archive"></i><span class="label">Documents</span><i class="fa fa-caret-left caret">  </i></a></li>
      <li data-bind="css: {active: displayTab() === 'pins'}, click: changeTab.bind($data, 'pins')"><a><i class="fa fa-thumb-tack"></i><span class="label">Pinned Docs</span><i class="fa fa-caret-left caret"></i></a></li>
      <!-- li.nav-control
      a
        i.fa.fa-sign-out
      -->
    </ul>
  </div>
  <section class="panel-content" data-bind="css: {collapsed: collapsedNav}">
    <div class="main-wrapper">
      <div class="widget" id="users" data-bind="visible: displayTab() === 'users'"><span>Users</span></div>
      <div class="widget" id="documents" data-bind="visible: displayTab() === 'documents'">
        <div id="collections">
          <div class="collection">
            <div class="collection-info">
              <div class="title"><span>Collection Name</span></div>
              <div class="detail"><span>January 28, 2014</span></div>
            </div>
            <div class="collection-controls"></div>
          </div>
        </div>
      </div>
      <div class="widget" id="pins" data-bind="visible: displayTab() === 'pins'"><span>Pins</span></div>
    </div>
  </section>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/knockout/3.0.0/knockout-min.js'></script>

  

    <script  src="js/index.js"></script>




</body>

</html>
