<div class="page-sidebar" id="sidebar">
        <ul class="nav sidebar-menu">

            <li style="<if condition="session('is_important') eq 0">display:none</if>">

                <a href="#" class="menu-dropdown">
                    <i class="menu-icon fa fa-gear"></i>
                    <span class="menu-text">管理员管理</span>
                    <i class="menu-expand"></i>
                </a>
                 <ul class="submenu">
                    <li>
                        <a href="<?php echo U("/Admin/Admin/index");?>">
                            <span class="menu-text">管理员列表</span>
                            <i class="menu-expand"></i>
                        </a>
                     </li>
                </ul>
            </li>
            <li>
                <a href="#" class="menu-dropdown">
                    <i class="menu-icon fa fa-gear"></i>
                    <span class="menu-text">网站首页</span>
                    <i class="menu-expand"></i>
                </a>
                 <ul class="submenu">
                    <li>
                        <a href="<?php echo U("/Admin/Webhome/index?type=教务通知");?>">
                            <span class="menu-text">教务通知</span>
                            <i class="menu-expand"></i>
                        </a>
                        <a href="<?php echo U("/Admin/Webhome/department?type=专业特色");?>">
                            <span class="menu-text">专业特色</span>
                            <i class="menu-expand"></i>
                        </a>

                        <a href="<?php echo U("/Admin/Webhome/index?type=质量工程");?>">
                            <span class="menu-text">质量工程</span>
                            <i class="menu-expand"></i>
                        </a>
                        <a href="<?php echo U("/Admin/Webhome/index?type=教务要闻");?>">
                            <span class="menu-text">教务要闻</span>
                            <i class="menu-expand"></i>
                        </a>
                        <a href="<?php echo U("/Admin/Webhome/index?type=单页");?>">
                            <span class="menu-text">单页</span>
                            <i class="menu-expand"></i>
                        </a>
                     </li>
                </ul>
            </li>
            <li>
                <a href="#" class="menu-dropdown">
                    <i class="menu-icon fa fa-gear"></i>
                    <span class="menu-text">机构设置</span>
                    <i class="menu-expand"></i>
                </a>
                 <ul class="submenu">
                    <li>
                        <a href="<?php echo U("/Admin/Web2/index?type=教学管理与信息办公室");?>">
                            <span class="menu-text">教学管理与信息办公室</span>
                            <i class="menu-expand"></i>
                        </a>
                     </li>
                     <li>
                        <a href="<?php echo U("/Admin/Web2/index?type=教改与质量办公室");?>">
                            <span class="menu-text">教改与质量办公室</span>
                            <i class="menu-expand"></i>
                        </a>
                     </li>
                     <li>
                        <a href="<?php echo U("/Admin/Web2/index?type=学籍管理办公室");?>">
                            <span class="menu-text">学籍管理办公室</span>
                            <i class="menu-expand"></i>
                        </a>
                     </li>
                     <li>
                        <a href="<?php echo U("/Admin/Web2/index?type=实践教学办公室");?>">
                            <span class="menu-text">实践教学办公室</span>
                            <i class="menu-expand"></i>
                        </a>
                     </li>
                </ul>
            </li>
            <li>
                <a href="#" class="menu-dropdown">
                    <i class="menu-icon fa fa-gear"></i>
                    <span class="menu-text">办事指南</span>
                    <i class="menu-expand"></i>
                </a>
                 <ul class="submenu">
                   <li>
                       <a href="<?php echo U("/Admin/Web3/index?type=教改与质量办公室");?>">
                           <span class="menu-text">教改与质量办公室</span>
                           <i class="menu-expand"></i>
                       </a>
                    </li>
                     <li>
                         <a href="<?php echo U("/Admin/Web3/index?type=教学管理与信息办公室");?>">
                             <span class="menu-text">教学管理与信息办公室</span>
                             <i class="menu-expand"></i>
                         </a>
                      </li>
                      <li>
                          <a href="<?php echo U("/Admin/Web3/index?type=学籍管理办公室");?>">
                              <span class="menu-text">学籍管理办公室</span>
                              <i class="menu-expand"></i>
                          </a>
                       </li>
                       <li>
                           <a href="<?php echo U("/Admin/Web3/index?type=实践教学办公室");?>">
                               <span class="menu-text">实践教学办公室</span>
                               <i class="menu-expand"></i>
                           </a>
                        </li>
                </ul>
            </li>
            <li>
                <a href="#" class="menu-dropdown">
                    <i class="menu-icon fa fa-gear"></i>
                    <span class="menu-text">规章制度</span>
                    <i class="menu-expand"></i>
                </a>
                 <ul class="submenu">
                   <li>
                       <a href="<?php echo U("/Admin/Web4/index?type=教学运行与管理");?>">
                           <span class="menu-text">教学运行与管理</span>
                           <i class="menu-expand"></i>
                       </a>
                    </li>
                     <li>
                         <a href="<?php echo U("/Admin/Web4/index?type=教学质量与监控");?>">
                             <span class="menu-text">教学质量与监控</span>
                             <i class="menu-expand"></i>
                         </a>
                      </li>
                      <li>
                          <a href="<?php echo U("/Admin/Web4/index?type=教学改革与研究");?>">
                              <span class="menu-text">教学改革与研究</span>
                              <i class="menu-expand"></i>
                          </a>
                       </li>
                       <li>
                           <a href="<?php echo U("/Admin/Web4/index?type=学籍管理");?>">
                               <span class="menu-text">学籍管理</span>
                               <i class="menu-expand"></i>
                           </a>
                        </li>
                        <li>
                            <a href="<?php echo U("/Admin/Web4/index?type=实践教学");?>">
                                <span class="menu-text">实践教学</span>
                                <i class="menu-expand"></i>
                            </a>
                         </li>
                </ul>
            </li>
            <li>
                <a href="__MODULE__/Web5/index" class="menu-dropdown">
                    <i class="menu-icon fa fa-gear"></i>
                    <span class="menu-text">教务简报</span>
                    <i class="menu-expand"></i>
                </a>

            </li>
            <li>
                <a href="__MODULE__/Web6/index" class="menu-dropdown">
                    <i class="menu-icon fa fa-gear"></i>
                    <span class="menu-text">专升本</span>
                    <i class="menu-expand"></i>
                </a>

            </li>
            <li>
                <a href="__MODULE__/Web7/index" class="menu-dropdown">
                    <i class="menu-icon fa fa-gear"></i>
                    <span class="menu-text">下载中心</span>
                    <i class="menu-expand"></i>
                </a>
                <ul class="submenu">
                  <li>
                      <a href="<?php echo U("/Admin/Web7/index?type=教学管理与信息办公室");?>">
                          <span class="menu-text">教学管理与信息办公室</span>
                          <i class="menu-expand"></i>
                      </a>
                   </li>
                    <li>
                        <a href="<?php echo U("/Admin/Web7/index?type=学籍管理办公室");?>">
                            <span class="menu-text">学籍管理办公室</span>
                            <i class="menu-expand"></i>
                        </a>
                     </li>
                     <li>
                         <a href="<?php echo U("/Admin/Web7/index?type=教学改革与质量办公室");?>">
                             <span class="menu-text">教学改革与质量办公室</span>
                             <i class="menu-expand"></i>
                         </a>
                      </li>
                      <li>
                          <a href="<?php echo U("/Admin/Web7/index?type=实践教学办公室");?>">
                              <span class="menu-text">实践教学办公室</span>
                              <i class="menu-expand"></i>
                          </a>
                       </li>

               </ul>
            </li>

        </ul>
        <!-- /Sidebar Menu -->
    </div>
