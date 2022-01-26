

<?php $__env->startSection('title', '災害情報ポータルプロジェクトについて - 災害情報ポータルサイト'); ?>

<?php $__env->startSection('body_id', 'event-edit'); ?>

<?php $__env->startSection('navbar'); ?>
    <span>
        <a href="<?php echo e(route('event.index')); ?>">
            <i class="fas fa-lg fa-arrow-left text-light"></i>
        </a>
    </span>
    <span class="navbar-brand mx-0 text-center text-light">
    災害イベントページの   
        <br class="d-sm-none">
        編集
    </span>
    <span></span>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contents'); ?>
    <div class="card shadow">
        <div class="card-body">
            <div class="container">
                  <div>
                    <h2 style="text-align:center;">災害イベントページの編集</h2>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">追加</button>
                    <div class="modal" id="myModal">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                    <form action="/edit/create" enctype="multipart/form-data" method="POST" class="form-group">
                                        <?php echo csrf_field(); ?>
                                     <!-- Modal Header -->
                                     <div class="modal-header">
                                       <h4 class="modal-title">追加</h4>
                                       <button type="button" class="close" data-dismiss="modal">&times;</button>
                                     </div>
        
                                     <!-- Modal body -->
                                     <div class="modal-body">

                                           <div class="form-group">
                                             <label class="form-group-text">災害名:</label>
                                             <input type="text" class="form-control" name="event_name">    
                                           </div>
                                           <div class="form-group">
                                             <label class="form-group-text">タイトル:</label>
                                             <input type="text" class="form-control" name="event_title">
                                           </div>
                                          <div class="form-group">
                                             <label class="form-group-text">内容:</label>
                                             <input type="text" class="form-control" name="event_body">
                                          </div>
                                          <div class="form-group">
                                             <label class="form-group-text">日付:</label>
                                             <input type="date" class="form-control" name="event_date">
                                          </div>
                                          <div class="form-group">
                                             <label class="form-group-text">画像:</label>
                                             <input type="file" class="form-control" name="event_img">    
                                           </div>

                                     </div>
        
                                     <!-- Modal footer -->
                                     <div class="modal-footer">
                                       <button type="submit" class="btn btn-success" data-dismiss="" >追加</button>
                                     </div>
                                     </form>
                                    </div>
                                  </div>
                                </div>                          
                  </div>
                  <div>
                  <table class="table table-bordered" style="text-align:center;overflow-wrap:anywhere;">
                    <thead class="table-primary">
                      <tr>
                         <th>災害名</th>
                         <th>タイトル</th>
                         <th>内容</th>
                         <th>編集</th>
                      </tr>
                    </thead>
                    <?php $__empty_1 = true; $__currentLoopData = $emergencyEvent->sortByDesc('event_date'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $emergencyEvent): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tbody>
                      <tr>
                         <td><?php echo e($emergencyEvent->event_name); ?></td>
                         <td><?php echo e($emergencyEvent->event_title); ?></td>
                         <td><?php echo e($emergencyEvent->event_body); ?></td>

                         <td>
                            <div class="btn-group btn-group-sm">
                                <a class="btn btn-success" data-toggle="modal" data-target="#myModal-<?php echo e($emergencyEvent->ee_id); ?>">変更</a>
                                
                                <div class="modal" id="myModal-<?php echo e($emergencyEvent->ee_id); ?>">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                    <form action="/edit" method="POST" enctype="multipart/form-data" class="form-group">
                                        <?php echo csrf_field(); ?>
                                     <!-- Modal Header -->
                                     <div class="modal-header">
                                       <h4 class="modal-title">変更</h4>
                                       <button type="button" class="close" data-dismiss="modal">&times;</button>
                                     </div>
        
                                     <!-- Modal body -->
                                     <div class="modal-body">
                                           <div class="form-group">
                                             <label class="form-group-text">災害名:</label>
                                             <input type="text" class="form-control" id="event_name" value="<?php echo e($emergencyEvent->event_name); ?>" name="event_name">    
                                           </div>
                                           <div class="form-group">
                                             <label class="form-group-text">タイトル:</label>
                                             <input type="text" class="form-control" value="<?php echo e($emergencyEvent->event_title); ?>" name="event_title">
                                           </div>
                                          <div class="form-group">
                                             <label class="form-group-text">内容:</label>
                                             <input type="text" class="form-control" value="<?php echo e($emergencyEvent->event_body); ?>" name="event_body">
                                          </div>
                                          <div class="form-group">
                                             <label class="form-group-text">画像:</label>
                                             <input type="file" class="form-control" name="event_img">    
                                           </div>
                                          <input style="display:none;" value="<?php echo e($emergencyEvent->ee_id); ?>" name="id">
                                     </div>
        
                                     <!-- Modal footer -->
                                     <div class="modal-footer">
                                       <button type="submit" class="btn btn-success" data-dismiss="" >変更</button>
                                     </div>   
                                     </form>
                                    </div>
                                  </div>
                                </div>       
                                <button type="button" class="btn btn-danger todo-delete-btn" data-id="<?php echo e($emergencyEvent->ee_id); ?>">削除</button>
                             </div>
                         </td>
                      </tr>
                    </tbody>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <span>No Found.</span>
                    <?php endif; ?>
                  </table>
                  </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\emergency-compelete\resources\views/event/edit.blade.php ENDPATH**/ ?>