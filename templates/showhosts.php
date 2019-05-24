<!-- Begin showmtg -->
<div class="card border-primary" style="width: 50%"> 
              <div class="card-header">
              <div class="row">
                  <div class="col-sm">
                    Due By:  
                    <?php if ($Host["ID"] != '99') {
                        echo date('n/j/Y',strtotime($task["dueDate"]));
                      } else  { 
                          echo "Not specified";
                      } ?> <!-- else -->
                  </div>
                  <div class="col-sm">
                      <?php
                       switch($Host["ChurchState"]) { 
                          case 'FL': ?>
                            <span class="badge float-right badge-warning">State: Florida</span> <?php
                            break; 
                          case 'GA': ?>
                            <span class="badge float-right badge-danger">State: Georgia</span> <?php
                            break; 
                          case 'AL': ?>
                            <span class="badge float-right badge-success">State: Alabama</span> <?php
                          default: ?>
                          	<span class="badge float-right badge-success">State: other</span><?php
                          break;
                        } ?>
                  </div>
                </div> <!-- Row #1 -->
                </div> <!-- Header -->
                <div class="card-body">
                  <h5 class ="card-title"><?php echo $Host["ChurchName"]; ?></h5>
                  <p class="card-text"><?php echo $Host["ID"]; ?></p>
                </div> <!-- Body -->
                <div class="card-footer">
                  <div class = "row">
                      <div class = "col-sm">
                          <?php if ($Host["ChurchPostalCode"] == '88888') { ?>
                              <h4><span class="badge badge-secondary">WILD</span></h4>
                          <?php } else { ?>
                              <h4><span class="badge badge-secondary">Zip</span></h4>
                          <?php } ?>
                      </div>
                      <div class = "col-sm">
                          <ul class="nav justify-content-end nav-pills card-header-pills">
                              <?php if ($Host["ChurchCity"] == 'Boise') { ?>
                                  <li class="nav-item">
                                      <a class="nav-link" href="/edittask.php?id=<?php echo $Host["ID"] ?>"> <i class="fas fa-edit"></i></a>
                                  </li>
                              <?php } ?>
                              <li class="nav-item">
                                  <a class="nav-link" href="/deletetask.php?id=<?php echo $Host["ID"] ?>"> <i class="fas fa-trash-alt"></i></a>
                              </li>
                              <li class="nav-item">
                                  <form method="post" action="/completetask.php?id=<?php echo $Host["ID"] ?>">
                                      <button type="submit" class="btn btn-link">
                                          <?php if ($Host["ChurchState"] == 'ID') { ?>
                                              <i class="fas fa-check"></i>
                                          <?php } else { ?>
                                              <i class="fas fa-redo-alt"></i>
                                          <?php } ?>
                                      </button>
                                  </form>
                              </li>
                          </ul>
                      </div>  
                  </div>
              </div>
            </div> <!-- Card -->   
           <p>
<!-- End showtask -->