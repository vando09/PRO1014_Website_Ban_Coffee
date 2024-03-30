 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
     <div class="container-fluid">
       <div class="row mb-2">
         <div class="col-sm-6">
           <h1>Quản lý tài khoản</h1>
         </div>
         <div class="col-sm-6">
           <ol class="breadcrumb float-sm-right">
             <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
             <li class="breadcrumb-item active">Quản lý tài khoản</li>
           </ol>
         </div>
       </div>
     </div>
     <button type="button" class="btn btn-primary">
       <i class="fa-solid fa-plus me-3"></i>Thêm tài khoản
     </button>

     <!-- /.container-fluid -->
   </section>

   <!-- Main content -->
   <section class="content">

     <!-- Default box -->
     <div class="card">
       <div class="card-header">
         <h3 class="card-title">Danh sách tài khoản</h3>

         <div class="card-tools">
           <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
             <i class="fas fa-minus"></i>
           </button>
           <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
             <i class="fas fa-times"></i>
           </button>
         </div>
       </div>

       <div class="card-body p-0">
         <table class="table table-striped projects">
           <thead>
             <tr>
               <th style="width: 1%">
                 #
               </th>
               <th>
                 Email
               </th>
               <th style="width: 20%">
                 Tên tài khoản
               </th>
               <th>
                 Hình đại diện
               </th>

               <th>
                 Loại tài khoản
               </th>
               <th style="width: 8%" class="text-center">
                 Trạng thái
               </th>
               <th style="width: 20%">
               </th>
             </tr>
           </thead>
           <tbody>
             <tr>
               <td>
                 #
               </td>
               <td>
                 <a>
                   Alexander
                 </a>
                 <br />
                 <small>
                   Ngày tạo 01.01.2019
                 </small>
               </td>
               <td>
                 examples@gmail.com
               </td>
               <td>
                 <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar.png">
               </td>
               <td class="project_progress">
                 Khách hàng
               </td>
               <td class="project-state">
                 <span class="badge badge-success">Hoạt động</span>
               </td>
               <td>

                 <a href="admin?act=accounts&page=edit" class="btn btn-warning"> <i class="fas fa-pencil-alt">
                   </i></a href="admin?act=accounts&page=edit">
                 <a href="admin?act=accounts&page=edit" class="btn btn-danger"> <i class="fa fa-trash"></i></a href="admin?act=accounts&page=edit">
               </td>
             </tr>


           </tbody>
         </table>
       </div>
       <!-- /.card-body -->
     </div>
     <!-- /.card -->

   </section>
   <!-- /.content -->
 </div>
 <!-- /.content-wrapper -->