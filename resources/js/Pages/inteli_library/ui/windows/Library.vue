<template>
  <div class="row">
    <div class="col-12">
     <div 
        :class="columnSize">
        <tab-pane
          :orientation="'vertical'">
           <tab title="Dashboard" 
                component="TabButton"
                icon_classes="fas fa-chess-board fa-2x"
                tab_button_classes="''">
           <div class="row mt-4 mb-4">
             <div class="col-xl-4 col-sm-6 mb-4">
               <div class="card glass-content">
                  <div class="numbers">
                   <p class="card-text">{{ analytics.authors }}</p>
                   <h5 class="card-title mb-0">Authors Listed</h5>
                  </div>
               </div>
             </div>
             <div class="col-xl-4 col-sm-6 mb-4">
               <div class="card glass-content">
                  <div class="numbers">
                       <p class="card-text">{{ analytics.publishers }}</p>
                       <h5 class="card-title mb-0">Publishers Listed</h5>
                  </div>
               </div>
             </div>
             <div class="col-xl-4 col-sm-6 mb-4">
               <div class="card glass-content">
                <div class="numbers">
                     <p class="card-text">{{ analytics.categories }}</p>
                     <h5 class="card-title mb-0">Categories Listed</h5>
                </div>
               </div>
             </div>
             <div class="col-xl-4 col-sm-6 mb-4">
               <div class="card glass-content">
                <div class="numbers">
                     <p class="card-text">{{ analytics.books }}</p>
                     <h5 class="card-title mb-0">Books Listed</h5>
                </div>
               </div>
             </div>
             <div class="col-xl-4 col-sm-6 mb-4">
               <div class="card glass-content">
                  <div class="numbers">
                       <p class="card-text">{{ analytics.students }}</p>
                       <h5 class="card-title mb-0">Register Students</h5>
                  </div>
               </div>
             </div>
             <div class="col-xl-4 col-sm-6 mb-4">
               <div class="card glass-content">
                <div class="numbers">
                     <p class="card-text">{{ analytics.issued_books }}</p>
                     <h5 class="card-title mb-0">Book Issued</h5>
                </div>
               </div>
             </div>
            </div>
           </tab>
           <tab title="Librarian" 
                component="TabButton"
                icon_classes="fas fa-user-lock fa-2x"
                tab_button_classes="mt-6">
           <div class="row">
             <div class="col-4">
               <modal-button @showmodal="launchModal('main-modal')" :name="'Add'" :icon_classes="'fas fa-plus'" :title="'Add New Librarian'" :modalSize="'modal-lg'" :componentType="'form'" :componentName="'MainForm'" :dataPath="'user/create'"></modal-button>
             </div>
             <div class="col-8"></div>
           </div>
           <div class="row mt-4 mb-4">
             <div class="col-xl-4 col-sm-6 mb-4">
               <div class="card glass-content">
                  <div class="numbers">
                   <p class="card-text">{{ analytics.authors }}</p>
                   <h5 class="card-title mb-0">Authors Listed</h5>
                  </div>
               </div>
             </div>
             <div class="col-xl-4 col-sm-6 mb-4">
               <div class="card glass-content">
                  <div class="numbers">
                       <p class="card-text">{{ analytics.publishers }}</p>
                       <h5 class="card-title mb-0">Publishers Listed</h5>
                  </div>
               </div>
             </div>
             <div class="col-xl-4 col-sm-6 mb-4">
               <div class="card glass-content">
                <div class="numbers">
                     <p class="card-text">{{ analytics.categories }}</p>
                     <h5 class="card-title mb-0">Categories Listed</h5>
                </div>
               </div>
             </div>
             <div class="col-xl-4 col-sm-6 mb-4">
               <div class="card glass-content">
                <div class="numbers">
                     <p class="card-text">{{ analytics.books }}</p>
                     <h5 class="card-title mb-0">Books Listed</h5>
                </div>
               </div>
             </div>
             <div class="col-xl-4 col-sm-6 mb-4">
               <div class="card glass-content">
                  <div class="numbers">
                       <p class="card-text">{{ analytics.students }}</p>
                       <h5 class="card-title mb-0">Register Students</h5>
                  </div>
               </div>
             </div>
             <div class="col-xl-4 col-sm-6 mb-4">
               <div class="card glass-content">
                <div class="numbers">
                     <p class="card-text">{{ analytics.issued_books }}</p>
                     <h5 class="card-title mb-0">Book Issued</h5>
                </div>
               </div>
             </div>
            </div>
           <div class="row">
             <div class="col-3"></div>
             <div class="col-6">
               <modal-button @showmodal="launchModal('main-modal')" :name="'View librarians Records'" :icon_classes="'far fa-eye'" :title="'Librarian Records'" :modalSize="'modal-xl'" :componentType="'card'" componentName="'TableData'" :dataPath="'librarian'"></modal-button>
             </div>
             <div class="col-3"></div>
           </div>
           </tab>
           <tab title="library" 
                component="TabButton"
                icon_classes="fas fa-book fa-2x"
                tab_button_classes="mt-6">
           <div class="row">
             <div class="col-4">
               <modal-button @showmodal="launchModal('main-modal')" :name="'Add'" :icon_classes="'fas fa-plus'" :title="'Add New School Library'" :modalSize="'modal-lg'" :componentType="'form'" :componentName="'MainForm'" :dataPath="'library/create'"></modal-button>
             </div>
             <div class="col-8"></div>
           </div>
           <div class="row mt-4 mb-4">
             <div class="col-xl-4 col-sm-6 mb-4">
               <div class="card glass-content">
                  <div class="numbers">
                   <p class="card-text">{{ analytics.authors }}</p>
                   <h5 class="card-title mb-0">Authors Listed</h5>
                  </div>
               </div>
             </div>
             <div class="col-xl-4 col-sm-6 mb-4">
               <div class="card glass-content">
                  <div class="numbers">
                       <p class="card-text">{{ analytics.publishers }}</p>
                       <h5 class="card-title mb-0">Publishers Listed</h5>
                  </div>
               </div>
             </div>
             <div class="col-xl-4 col-sm-6 mb-4">
               <div class="card glass-content">
                <div class="numbers">
                     <p class="card-text">{{ analytics.categories }}</p>
                     <h5 class="card-title mb-0">Categories Listed</h5>
                </div>
               </div>
             </div>
             <div class="col-xl-4 col-sm-6 mb-4">
               <div class="card glass-content">
                <div class="numbers">
                     <p class="card-text">{{ analytics.books }}</p>
                     <h5 class="card-title mb-0">Books Listed</h5>
                </div>
               </div>
             </div>
             <div class="col-xl-4 col-sm-6 mb-4">
               <div class="card glass-content">
                  <div class="numbers">
                       <p class="card-text">{{ analytics.students }}</p>
                       <h5 class="card-title mb-0">Register Students</h5>
                  </div>
               </div>
             </div>
             <div class="col-xl-4 col-sm-6 mb-4">
               <div class="card glass-content">
                <div class="numbers">
                     <p class="card-text">{{ analytics.issued_books }}</p>
                     <h5 class="card-title mb-0">Book Issued</h5>
                </div>
               </div>
             </div>
            </div>
           <div class="row">
             <div class="col-3"></div>
             <div class="col-6">
               <modal-button @showmodal="launchModal('main-modal')" :name="'View Library Records'" :icon_classes="'far fa-eye'" :title="'School Library Records'" :modalSize="'modal-xl'" :componentType="'table'" componentName="'TableData'" :dataPath="'libraries'"></modal-button>
             </div>
             <div class="col-3"></div>
           </div> 
           </tab>
           <tab title="Book Issue" 
                component="TabButton"
                icon_classes="fas fa-id-card fa-2x"
                tab_button_classes="mt-6">
           <div class="row">
             <div class="col-4">
               <modal-button @showmodal="launchModal('main-modal')" :name="'Issue'" :icon_classes="'fas fa-plus'" :title="'Issue New Book'" :modalSize="'modal-lg'" :componentType="'form'" :componentName="'MainForm'" :dataPath="'library/book/issue/create'"></modal-button>
             </div>
             <div class="col-8"></div>
           </div>
           <div class="row mt-4 mb-4">
             <div class="col-xl-4 col-sm-6 mb-4">
               <div class="card glass-content">
                  <div class="numbers">
                   <p class="card-text">{{ analytics.authors }}</p>
                   <h5 class="card-title mb-0">Authors Listed</h5>
                  </div>
               </div>
             </div>
             <div class="col-xl-4 col-sm-6 mb-4">
               <div class="card glass-content">
                  <div class="numbers">
                       <p class="card-text">{{ analytics.publishers }}</p>
                       <h5 class="card-title mb-0">Publishers Listed</h5>
                  </div>
               </div>
             </div>
             <div class="col-xl-4 col-sm-6 mb-4">
               <div class="card glass-content">
                <div class="numbers">
                     <p class="card-text">{{ analytics.categories }}</p>
                     <h5 class="card-title mb-0">Categories Listed</h5>
                </div>
               </div>
             </div>
             <div class="col-xl-4 col-sm-6 mb-4">
               <div class="card glass-content">
                <div class="numbers">
                     <p class="card-text">{{ analytics.books }}</p>
                     <h5 class="card-title mb-0">Books Listed</h5>
                </div>
               </div>
             </div>
             <div class="col-xl-4 col-sm-6 mb-4">
               <div class="card glass-content">
                  <div class="numbers">
                       <p class="card-text">{{ analytics.students }}</p>
                       <h5 class="card-title mb-0">Register Students</h5>
                  </div>
               </div>
             </div>
             <div class="col-xl-4 col-sm-6 mb-4">
               <div class="card glass-content">
                <div class="numbers">
                     <p class="card-text">{{ analytics.issued_books }}</p>
                     <h5 class="card-title mb-0">Book Issued</h5>
                </div>
               </div>
             </div>
            </div>
           <div class="row">
             <div class="col-3"></div>
             <div class="col-6">
               <modal-button @showmodal="launchModal('main-modal')" :name="'View Book-Issue Records'" :icon_classes="'far fa-eye'" :title="'Book-Issue Records'" :modalSize="'modal-xl'" :componentType="'table'" componentName="'TableData'" :dataPath="'book/issue'"></modal-button>
             </div>
             <div class="col-3"></div>
           </div>
           </tab>
           <tab title="Book Categories" 
                component="TabButton"
                icon_classes="fas fa-code-branch fa-2x"
                tab_button_classes="mt-6">
           <div class="row">
             <div class="col-4">
               <modal-button @showmodal="launchModal('main-modal')" :name="'Add'" :icon_classes="'fas fa-plus'" :title="'Add New Book Category'" :modalSize="'modal-lg'" :componentType="'form'" :componentName="'MainForm'" :dataPath="'library/book/category/create'"></modal-button>
             </div>
             <div class="col-8"></div>
           </div>
           <div class="row mt-4 mb-4">
             <div class="col-xl-4 col-sm-6 mb-4">
               <div class="card glass-content">
                  <div class="numbers">
                   <p class="card-text">{{ analytics.authors }}</p>
                   <h5 class="card-title mb-0">Authors Listed</h5>
                  </div>
               </div>
             </div>
             <div class="col-xl-4 col-sm-6 mb-4">
               <div class="card glass-content">
                  <div class="numbers">
                       <p class="card-text">{{ analytics.publishers }}</p>
                       <h5 class="card-title mb-0">Publishers Listed</h5>
                  </div>
               </div>
             </div>
             <div class="col-xl-4 col-sm-6 mb-4">
               <div class="card glass-content">
                <div class="numbers">
                     <p class="card-text">{{ analytics.categories }}</p>
                     <h5 class="card-title mb-0">Categories Listed</h5>
                </div>
               </div>
             </div>
             <div class="col-xl-4 col-sm-6 mb-4">
               <div class="card glass-content">
                <div class="numbers">
                     <p class="card-text">{{ analytics.books }}</p>
                     <h5 class="card-title mb-0">Books Listed</h5>
                </div>
               </div>
             </div>
             <div class="col-xl-4 col-sm-6 mb-4">
               <div class="card glass-content">
                  <div class="numbers">
                       <p class="card-text">{{ analytics.students }}</p>
                       <h5 class="card-title mb-0">Register Students</h5>
                  </div>
               </div>
             </div>
             <div class="col-xl-4 col-sm-6 mb-4">
               <div class="card glass-content">
                <div class="numbers">
                     <p class="card-text">{{ analytics.issued_books }}</p>
                     <h5 class="card-title mb-0">Book Issued</h5>
                </div>
               </div>
             </div>
            </div>
           <div class="row">
             <div class="col-3"></div>
             <div class="col-6">
               <modal-button @showmodal="launchModal('main-modal')" :name="'View Book Category Records'" :icon_classes="'far fa-eye'" :title="'Book Category Records'" :modalSize="'modal-xl'" :componentType="'table'" componentName="'TableData'" :dataPath="'book/categories'"></modal-button>
             </div>
             <div class="col-3"></div>
           </div>
           </tab>
           <tab title="Authors" 
                component="TabButton"
                icon_classes="fas fa-feather fa-2x"
                tab_button_classes="mt-6">
           <div class="row">
             <div class="col-4">
               <modal-button @showmodal="launchModal('main-modal')" :name="'Add'" :icon_classes="'fas fa-plus'" :title="'Add New Book Author'" :modalSize="'modal-lg'" :componentType="'form'" :componentName="'MainForm'" :dataPath="'library/author/create'"></modal-button>
             </div>
             <div class="col-8"></div>
           </div>
           <div class="row mt-4 mb-4">
             <div class="col-xl-4 col-sm-6 mb-4">
               <div class="card glass-content">
                  <div class="numbers">
                   <p class="card-text">{{ analytics.authors }}</p>
                   <h5 class="card-title mb-0">Authors Listed</h5>
                  </div>
               </div>
             </div>
             <div class="col-xl-4 col-sm-6 mb-4">
               <div class="card glass-content">
                  <div class="numbers">
                       <p class="card-text">{{ analytics.publishers }}</p>
                       <h5 class="card-title mb-0">Publishers Listed</h5>
                  </div>
               </div>
             </div>
             <div class="col-xl-4 col-sm-6 mb-4">
               <div class="card glass-content">
                <div class="numbers">
                     <p class="card-text">{{ analytics.categories }}</p>
                     <h5 class="card-title mb-0">Categories Listed</h5>
                </div>
               </div>
             </div>
             <div class="col-xl-4 col-sm-6 mb-4">
               <div class="card glass-content">
                <div class="numbers">
                     <p class="card-text">{{ analytics.books }}</p>
                     <h5 class="card-title mb-0">Books Listed</h5>
                </div>
               </div>
             </div>
             <div class="col-xl-4 col-sm-6 mb-4">
               <div class="card glass-content">
                  <div class="numbers">
                       <p class="card-text">{{ analytics.students }}</p>
                       <h5 class="card-title mb-0">Register Students</h5>
                  </div>
               </div>
             </div>
             <div class="col-xl-4 col-sm-6 mb-4">
               <div class="card glass-content">
                <div class="numbers">
                     <p class="card-text">{{ analytics.issued_books }}</p>
                     <h5 class="card-title mb-0">Book Issued</h5>
                </div>
               </div>
             </div>
            </div>
           <div class="row">
             <div class="col-3"></div>
             <div class="col-6">
               <modal-button @showmodal="launchModal('main-modal')" :name="'View Book Authors Records'" :icon_classes="'far fa-eye'" :title="'Book Authors Records'" :modalSize="'modal-xl'" :componentType="'card'" componentName="'TableData'" :dataPath="'authors'"></modal-button>
             </div>
             <div class="col-3"></div>
           </div>
           </tab>
           <tab title="Books" 
                component="TabButton"
                icon_classes="fas fa-building fa-2x"
                tab_button_classes="mt-6">
           <div class="row">
             <div class="col-4">
               <modal-button @showmodal="launchModal('main-modal')" :name="'Add'" :icon_classes="'fas fa-plus'" :title="'Add New Book'" :modalSize="'modal-lg'" :componentType="'form'" :componentName="'MainForm'" :dataPath="'library/book/create'"></modal-button>
             </div>
             <div class="col-8"></div>
           </div>
           <div class="row mt-4 mb-4">
             <div class="col-xl-4 col-sm-6 mb-4">
               <div class="card glass-content">
                  <div class="numbers">
                   <p class="card-text">{{ analytics.authors }}</p>
                   <h5 class="card-title mb-0">Authors Listed</h5>
                  </div>
               </div>
             </div>
             <div class="col-xl-4 col-sm-6 mb-4">
               <div class="card glass-content">
                  <div class="numbers">
                       <p class="card-text">{{ analytics.publishers }}</p>
                       <h5 class="card-title mb-0">Publishers Listed</h5>
                  </div>
               </div>
             </div>
             <div class="col-xl-4 col-sm-6 mb-4">
               <div class="card glass-content">
                <div class="numbers">
                     <p class="card-text">{{ analytics.categories }}</p>
                     <h5 class="card-title mb-0">Categories Listed</h5>
                </div>
               </div>
             </div>
             <div class="col-xl-4 col-sm-6 mb-4">
               <div class="card glass-content">
                <div class="numbers">
                     <p class="card-text">{{ analytics.books }}</p>
                     <h5 class="card-title mb-0">Books Listed</h5>
                </div>
               </div>
             </div>
             <div class="col-xl-4 col-sm-6 mb-4">
               <div class="card glass-content">
                  <div class="numbers">
                       <p class="card-text">{{ analytics.students }}</p>
                       <h5 class="card-title mb-0">Register Students</h5>
                  </div>
               </div>
             </div>
             <div class="col-xl-4 col-sm-6 mb-4">
               <div class="card glass-content">
                <div class="numbers">
                     <p class="card-text">{{ analytics.issued_books }}</p>
                     <h5 class="card-title mb-0">Book Issued</h5>
                </div>
               </div>
             </div>
            </div>
           <div class="row">
             <div class="col-3"></div>
             <div class="col-6">
               <modal-button @showmodal="launchModal('main-modal')" :name="'View Book Records'" :icon_classes="'far fa-eye'" :title="'Book Records'" :modalSize="'modal-xl'" :componentType="'card'" componentName="'TableData'" :dataPath="'books'"></modal-button>
             </div>
             <div class="col-3"></div>
           </div>
           </tab>
           <tab title="Publishers" 
                component="TabButton"
                icon_classes="fas fa-building fa-2x"
                tab_button_classes="mt-6">
           <div class="row">
             <div class="col-4">
               <modal-button @showmodal="launchModal('main-modal')" :name="'Add'" :icon_classes="'fas fa-plus'" :title="'Add New Book Publisher'" :modalSize="'modal-lg'" :componentType="'form'" :componentName="'MainForm'" :dataPath="'library/publisher/create'"></modal-button>
             </div>
             <div class="col-8"></div>
           </div>
           <div class="row mt-4 mb-4">
             <div class="col-xl-4 col-sm-6 mb-4">
               <div class="card glass-content">
                  <div class="numbers">
                   <p class="card-text">{{ analytics.authors }}</p>
                   <h5 class="card-title mb-0">Authors Listed</h5>
                  </div>
               </div>
             </div>
             <div class="col-xl-4 col-sm-6 mb-4">
               <div class="card glass-content">
                  <div class="numbers">
                       <p class="card-text">{{ analytics.publishers }}</p>
                       <h5 class="card-title mb-0">Publishers Listed</h5>
                  </div>
               </div>
             </div>
             <div class="col-xl-4 col-sm-6 mb-4">
               <div class="card glass-content">
                <div class="numbers">
                     <p class="card-text">{{ analytics.categories }}</p>
                     <h5 class="card-title mb-0">Categories Listed</h5>
                </div>
               </div>
             </div>
             <div class="col-xl-4 col-sm-6 mb-4">
               <div class="card glass-content">
                <div class="numbers">
                     <p class="card-text">{{ analytics.books }}</p>
                     <h5 class="card-title mb-0">Books Listed</h5>
                </div>
               </div>
             </div>
             <div class="col-xl-4 col-sm-6 mb-4">
               <div class="card glass-content">
                  <div class="numbers">
                       <p class="card-text">{{ analytics.students }}</p>
                       <h5 class="card-title mb-0">Register Students</h5>
                  </div>
               </div>
             </div>
             <div class="col-xl-4 col-sm-6 mb-4">
               <div class="card glass-content">
                <div class="numbers">
                     <p class="card-text">{{ analytics.issued_books }}</p>
                     <h5 class="card-title mb-0">Book Issued</h5>
                </div>
               </div>
             </div>
            </div>
           <div class="row">
             <div class="col-3"></div>
             <div class="col-6">
               <modal-button @showmodal="launchModal('main-modal')" :name="'View Publishers Records'" :icon_classes="'far fa-eye'" :title="'Publishers Records'" :modalSize="'modal-xl'" :componentType="'card'" componentName="'TableData'" :dataPath="'publishers'"></modal-button>
             </div>
             <div class="col-3"></div>
           </div>
           </tab>
           <tab title="Settings" 
                component="TabButton"
                icon_classes="fas fa-cogs fa-2x"
                tab_button_classes="mt-6">
         <div class="container-fluid py-4">
           <div class="row">
             <div class="col-12 col-xl-9 glass-content">
               <div class="card h-100">
                 <div class="card-header pb-0 p-3">
                   <h6 class="mb-0">Platform Settings</h6>
                 </div>
                 <div class="card-body p-3">
                   <h6 class="text-uppercase text-body text-xs font-weight-bolder">Account</h6>
                   <ul class="list-group">
                     <li class="list-group-item border-0 px-0">
                       <div class="form-check form-switch ps-0">
                         <input class="form-check-input ms-auto" type="checkbox" id="flexSwitchCheckDefault" checked>
                         <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0" for="flexSwitchCheckDefault">Email me when someone follows me</label>
                       </div>
                     </li>
                     <li class="list-group-item border-0 px-0">
                       <div class="form-check form-switch ps-0">
                         <input class="form-check-input ms-auto" type="checkbox" id="flexSwitchCheckDefault1">
                         <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0" for="flexSwitchCheckDefault1">Email me when someone answers on my post</label>
                       </div>
                     </li>
                     <li class="list-group-item border-0 px-0">
                       <div class="form-check form-switch ps-0">
                         <input class="form-check-input ms-auto" type="checkbox" id="flexSwitchCheckDefault2" checked>
                         <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0" for="flexSwitchCheckDefault2">Email me when someone mentions me</label>
                       </div>
                     </li>
                   </ul>
                   <h6 class="text-uppercase text-body text-xs font-weight-bolder mt-4">Application</h6>
                   <ul class="list-group">
                     <li class="list-group-item border-0 px-0">
                       <div class="form-check form-switch ps-0">
                         <input class="form-check-input ms-auto" type="checkbox" id="flexSwitchCheckDefault3">
                         <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0" for="flexSwitchCheckDefault3">New launches and projects</label>
                       </div>
                     </li>
                     <li class="list-group-item border-0 px-0">
                       <div class="form-check form-switch ps-0">
                         <input class="form-check-input ms-auto" type="checkbox" id="flexSwitchCheckDefault4" checked>
                         <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0" for="flexSwitchCheckDefault4">Monthly product updates</label>
                       </div>
                     </li>
                     <li class="list-group-item border-0 px-0 pb-0">
                       <div class="form-check form-switch ps-0">
                         <input class="form-check-input ms-auto" type="checkbox" id="flexSwitchCheckDefault5">
                         <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0" for="flexSwitchCheckDefault5">Subscribe to newsletter</label>
                       </div>
                     </li>
                   </ul>
                 </div>
               </div>
             </div>
           </div>
         </div>
           </tab>
        </tab-pane>
     </div>
    </div>
  </div>
  <main-modal></main-modal>
</template>

<script>
    import { defineComponent } from 'vue'

    import {store} from "../../../../store/store.js"

    import DataCard from '../../../inteli/ui/components/cards/DataCard.vue'

    import DataTable  from "../../../inteli/ui/components/tables/DataTable.vue"

    import ModalButton from '../../../inteli/ui/components/buttons/ModalButton.vue'
    import MainModal from '../../../inteli/ui/components/modals/MainModal.vue'
    import MainForm from '../../../inteli/ui/components/forms/MainForm.vue'

    import TabPane from '../../../inteli/ui/components/tabs/TabPane.vue'

    import Tab from '../../../inteli/ui/components/tabs/Tab.vue'

    export default defineComponent({
        components: {
            DataCard,
            DataTable,
            MainModal,
            ModalButton,
            MainForm,
            TabPane,
            Tab
        },
        data() {
            return {
                analytics: [],
            }
        },

        methods: {
          launchModal(modal)
          {
            var modal = new bootstrap.Modal(document.getElementById(modal))
            modal.show()
          },
            trim(text, length, comment)
            {
                return text.substr(0,length) + comment;
            },
            getAnalytics(url)
            {
                axios.get(url)
                .then((response)=>{
                   this.analytics= response.data
                })
            },
        },
        mounted()
        {
            this.getAnalytics("analytics")
        },
    })
</script>


<style scoped>


.glass-container
{
   /*
    position: relative;
    min-height: calc(100vh - 280);
    width: calc(100% - 100px);
    */
    background: rgba(255, 255, 255, 0.5);
    box-shadow: 0 15px 35px rgba(255, 255, 255, 0.05);
    border-radius: 20px;
    justify-content: space-between;
}


.glass-content
{
    transform: translateX(-100);
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.05);
    border-radius: 20px;
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.5);
    border-top: 1px solid rgba(255, 255, 255, 0.25);
    border-left: 1px solid rgba(255, 255, 255, 0.5);
    padding: 5px;
}

.card, .card-header, .card-body, .list-group, .list-group-item, .nav
{
  background: transparent !important;
}

.glass-header
{
    background: rgba(255, 255, 255, 0.2);
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.05);
    border-radius: 20px;
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.5);
    border-top: 1px solid rgba(255, 255, 255, 0.25);
    border-left: 1px solid rgba(255, 255, 255, 0.5);
}

.avatar-size
{
    height: 150px !important;
    width: 150px !important;
}

</style>
