<template>
  <div class="main-content position-relative" >
    <div class="d-flex align-items-start">
      <div class="nav glass-content  flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
        <button class="nav-link active" id="v-pills-dashboard-tab" data-bs-toggle="pill" data-bs-target="#v-pills-dashboard" type="button" role="tab" aria-controls="v-pills-dashboard" aria-selected="true"><i class="fas fa-tachometer fa-2x"></i></button>
        <button class="nav-link mt-6" id="v-pills-warehouse-tab" data-bs-toggle="pill" data-bs-target="#v-pills-warehouse" type="button" role="tab" aria-controls="v-pills-warehouse" aria-selected="true"><i class="fas fa-warehouse fa-2x"></i></button>
        <button class="nav-link mt-6" id="v-pills-inventory-tab" data-bs-toggle="pill" data-bs-target="#v-pills-inventory" type="button" role="tab" aria-controls="v-pills-inventory" aria-selected="false"><i class="fas fa-boxes fa-2x"></i></button>
        <button class="nav-link mt-6" id="v-pills-supplier-tab" data-bs-toggle="pill" data-bs-target="#v-pills-supplier" type="button" role="tab" aria-controls="v-pills-supplier" aria-selected="false"><i class="fas fa-store fa-2x"></i></button>
        <button class="nav-link mt-6" id="v-pills-purchase-tab" data-bs-toggle="pill" data-bs-target="#v-pills-purchase" type="button" role="tab" aria-controls="v-pills-purchase" aria-selected="false"><i class="fas fa-cash-register fa-2x"></i></button>
        <button class="nav-link mt-6"  data-bs-toggle="collapse" data-bs-target="#report-tab-links-collapse" aria-expanded="false" aria-controls="expense-tab-links-collapse"><i class="fas fa-newspaper fa-2x"></i></button>
        <button class="nav-link mt-6" id="v-pills-catalogue-tab" data-bs-toggle="pill" data-bs-target="#v-pills-catalogue" type="button" role="tab" aria-controls="v-pills-catalogue" aria-selected="false"><i class="fas fa-list fa-2x"></i></button>
        <button class="nav-link mt-6" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false"><i class="fas fa-cogs fa-2x"></i></button>
      </div>
      <div class="tab-content glass-content" id="v-pills-tabContent">
        <!--START Dashboard PANE-->
        <div class="tab-pane fade show active" id="v-pills-dashboard" role="tabpanel" aria-labelledby="v-pills-dashboard-tab">
           <div class="row mt-4 mb-4">
             <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
               <div class="card glass-content">
                 <div class="card-body p-3">
                   <div class="row">
                     <div class="col-8">
                       <div class="numbers">
                         <p class="text-sm mb-0 text-capitalize font-weight-bold">Received Purchases</p>
                            <p class="card-text">{{ analytics.authors }}</p>
                            <h5 class="card-title mb-0">Authors Listed</h5>
                       </div>
                     </div>
                   </div>
                 </div>
               </div>
             </div>
             <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
               <div class="card glass-content">
                 <div class="card-body p-3">
                   <div class="row">
                     <div class="col-8">
                       <div class="numbers">
                            <p class="card-text">{{ analytics.publishers }}</p>
                            <h5 class="card-title mb-0">Publishers Listed</h5>
                       </div>
                     </div>
                   </div>
                 </div>
               </div>
             </div>
             <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
               <div class="card glass-content">
                 <div class="card-body p-3">
                   <div class="row">
                     <div class="col-8">
                       <div class="numbers">
                            <p class="card-text">{{ analytics.categories }}</p>
                            <h5 class="card-title mb-0">Categories Listed</h5>
                       </div>
                     </div>
                   </div>
                 </div>
               </div>
             </div>
             <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
               <div class="card glass-content">
                 <div class="card-body p-3">
                   <div class="row">
                     <div class="col-8">
                       <div class="numbers">
                            <p class="card-text">{{ analytics.books }}</p>
                            <h5 class="card-title mb-0">Books Listed</h5>
                       </div>
                     </div>
                   </div>
                 </div>
               </div>
             </div>
             <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
               <div class="card glass-content">
                 <div class="card-body p-3">
                   <div class="row">
                     <div class="col-8">
                       <div class="numbers">
                            <p class="card-text">{{ $students }}</p>
                            <h5 class="card-title mb-0">Register Students</h5>
                       </div>
                     </div>
                   </div>
                 </div>
               </div>
             </div>
             <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
               <div class="card glass-content">
                 <div class="card-body p-3">
                   <div class="row">
                     <div class="col-8">
                       <div class="numbers">
                            <p class="card-text">{{ analytics.issued_books }}</p>
                            <h5 class="card-title mb-0">Book Issued</h5>
                       </div>
                     </div>
                   </div>
                 </div>
               </div>
             </div>
            </div>
        </div>
        <!--END Dashboard PANE-->

        <!--START Warehouse PANE-->
        <div class="tab-pane fade" id="v-pills-warehouse" role="tabpanel" aria-labelledby="v-pills-warehouse-tab">
         <div class="container-fluid py-4">
           <div class="row">
             <div class="col-11 col-xl-11 glass-content">
              <div class="card-body px-0 pb-2">
                  <div class="table-responsive">
                    <table class="table align-items-center mb-0">
                      <thead>
                        <tr>
                          <th class="text-uppercase text-secondary font-weight-bolder opacity-7">Warehouse Name</th>
                          <th class="text-center text-uppercase text-secondary font-weight-bolder opacity-7">Phone</th>
                          <th class="text-center text-uppercase text-secondary font-weight-bolder opacity-7">Company Name</th>
                          <th class="text-center text-uppercase text-secondary font-weight-bolder opacity-7">Status</th>
                          <th class="text-center text-uppercase text-secondary font-weight-bolder opacity-7">Priority</th>
                          <th class="text-center text-uppercase text-secondary font-weight-bolder opacity-7">Status</th>
                          <th class="text-center text-uppercase text-secondary font-weight-bolder opacity-7">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr v-for="store in warehouse" :key="store.id">
                          <td>
                            <div class="d-flex px-2 py-1">
                              <div class="d-flex flex-column justify-content-center">
                                <h6 class="mb-0 text-sm">{{store.name}}</h6>
                              </div>
                            </div>
                          </td>
                          <td class="align-middle text-center text-sm">
                            <span class="text-xs font-weight-bold"> {{store.phone}} </span>
                          </td>
                          <td>
                           <div class="d-flex flex-column justify-content-center">
                             <span class="text-xs font-weight-bold"> {{store.email}} </span>
                           </div>
                          </td>
                          <td class="align-middle">
                              <span class="text-xs font-weight-bold"> {{store.company}} </span>
                          </td>
                          <td class="align-middle">
                              <span class="text-xs font-weight-bold"> {{store.address}} </span>
                          </td>
                          <td class="align-middle">
                              <span class="text-xs font-weight-bold"> {{store.address}} </span>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
              </div>
             </div>
           </div>
         </div>
        </div>
        <!--END Warehouse PANE-->

        <!--START INVENTORY PANES-->
        <div class="tab-pane fade" id="v-pills-inventory" role="tabpanel" aria-labelledby="v-pills-inventory-tab">
          <!--START STOCK INVENTORY TAB LINKS-->
          <ul class="nav nav-pills" id="inventory-tab-links" role="tablist">
            <li class="nav-item" role="presentation">
               <button class="nav-link active" id="stock-tab" data-bs-toggle="tab" data-bs-target="#stock" type="button" role="tab" aria-controls="stock" aria-selected="true">Stock</button>
            </li>
            <li class="nav-item" role="presentation">
             <button class="nav-link" id="stock-category-tab" data-bs-toggle="tab" data-bs-target="#stock-category" type="button" role="tab" aria-controls="stock-category" aria-selected="false">Category</button>
            </li>
            <li class="nav-item" role="presentation">
             <button class="nav-link" id="manufacturer-tab" data-bs-toggle="tab" data-bs-target="#manufacturer" type="button" role="tab" aria-controls="manufacturer" aria-selected="false">Manufacturer</button>
            </li>
            <li class="nav-item" role="presentation">
             <button class="nav-link" id="brand-tab" data-bs-toggle="tab" data-bs-target="#brand" type="button" role="tab" aria-controls="brand" aria-selected="false">Brand</button>
            </li>
          </ul>
          <!--END STOCK INVENTORY TAB LINKS-->

          <div class="tab-content" id="inventory-tab-content">
           <!--START Stock PANE-->
           <div class="tab-pane fade show active" id="stock" role="tabpanel" aria-labelledby="stock-tab">
             <div class="container-fluid">
               <div class="row">
                 <div class="col-11 col-xl-11 glass-content">
                  <div class="card-body px-0 pb-2">
                      <div class="table-responsive">
                        <table class="table align-items-center mb-0">
                          <thead>
                            <tr >
                              <th class="text-uppercase text-secondary font-weight-bolder opacity-7">SL</th>
                              <th class="text-uppercase text-secondary font-weight-bolder opacity-7"><input type="checkbox" name="" id=""></th>
                              <th class="text-uppercase text-secondary font-weight-bolder opacity-7">Thumb</th>
                              <th class="text-uppercase text-secondary font-weight-bolder opacity-7">Product Name</th>
                              <th class="text-center text-uppercase text-secondary font-weight-bolder opacity-7">SKU</th>
                              <th class="text-center text-uppercase text-secondary font-weight-bolder opacity-7">Categoty</th>
                              <th class="text-center text-uppercase text-secondary font-weight-bolder opacity-7">Price</th>
                              <th class="text-center text-uppercase text-secondary font-weight-bolder opacity-7">Stock Quantity</th>
                              <th class="text-center text-uppercase text-secondary font-weight-bolder opacity-7">Variant</th>
                              <th class="text-center text-uppercase text-secondary font-weight-bolder opacity-7">Status</th>
                              <th class="text-center text-uppercase text-secondary font-weight-bolder opacity-7">Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr v-for="product in products" :key="product.id">
                              <td>
                                <div class="d-flex px-2 py-1">
                                  <div class="d-flex flex-column justify-content-center">
                                    <h6 class="mb-0 text-sm"> {{product.id}} </h6>
                                  </div>
                                </div>
                              </td>
                              <td><input type="checkbox" name="" id=""></td>
                              <td>
                               <div class="d-flex flex-column justify-content-center">
                                <img :src="product.thumbnail" alt="" srcset="">
                               </div>
                              </td>
                              <td>
                               <div class="d-flex flex-column justify-content-center">
                                {{product.name}}
                               </div>
                              </td>
                              <td class="align-middle text-center text-sm">
                                <span class="text-xs font-weight-bold"> {{product.SKU}} </span>
                              </td>
                              <td class="align-middle">
                                  <span class="text-xs font-weight-bold"> {{product.product_category.category}} </span>
                              </td>
                              <td class="align-middle">
                                  <span class="text-xs font-weight-bold"> {{product.price}} </span>
                              </td>
                              <td class="align-middle">
                                  <span class="text-xs font-weight-bold"> {{product.quantity}} </span>
                              </td>
                              <td class="align-middle">
                                  <span class="text-xs font-weight-bold"> {{product.variant}} </span>
                              </td>
                              <td class="align-middle">
                                  <span class="text-xs font-weight-bold"> {{product.status}} </span>
                              </td>
                              <td class="align-middle">
                                  <span class="text-xs font-weight-bold"> $14,000 </span>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                  </div>
                 </div>
               </div>
             </div>
           </div>
           <!--END Stock PANE-->

           <!--START Product Category PANE-->
           <div class="tab-pane fade" id="stock-category" role="tabpanel" aria-labelledby="stock-category-tab">
              <div class="row">
                <div class="col-11 col-xl-11 glass-content">
                     <div class="table-responsive">
                       <table class="table align-items-center mb-0">
                         <thead>
                           <tr>
                             <th class="text-uppercase text-secondary font-weight-bolder opacity-7">SL</th>
                             <th class="text-uppercase text-secondary font-weight-bolder opacity-7">Image</th>
                             <th class="text-uppercase text-secondary font-weight-bolder opacity-7">Category Name</th>
                             <th class="text-center text-uppercase text-secondary font-weight-bolder opacity-7">Description</th>
                             <th class="text-center text-uppercase text-secondary font-weight-bolder opacity-7">Status</th>
                             <th class="text-center text-uppercase text-secondary font-weight-bolder opacity-7">Action</th>
                           </tr>
                         </thead>
                         <tbody>
                           <tr v-for="category in categories" :key="category.id">
                             <td>
                               <div class="d-flex px-2 py-1">
                                 <div class="d-flex flex-column justify-content-center">
                                   <h6 class="mb-0 text-sm">{{category.id}}</h6>
                                 </div>
                               </div>
                             </td>
                             <td>
                              <div class="d-flex flex-column justify-content-center">
                                <img :src="category.image" alt="" class="avatar-size" srcset="">
                              </div>
                             </td>
                             <td class="align-middle text-center text-sm">
                               <span class="text-xs font-weight-bold"> {{category.category}} </span>
                             </td>
                             <td class="">
                                 <div class="">
                                     {{trim(category.description,100, "...")}}
                                 </div>
                             </td>
                             <td class="align-middle">
                                 <span class="text-xs font-weight-bold"> {{category.status}} </span>
                             </td>
                             <td class="align-middle">
                                 <span class="text-xs font-weight-bold">  </span>
                             </td>
                           </tr>
                         </tbody>
                       </table>
                     </div>
                </div>
              </div>
           </div>
          <!--END Product Category PANE-->

          <!--START Brand PANE-->
          <div class="tab-pane fade" id="brand" role="tabpanel" aria-labelledby="brand-tab">
           <div class="container-fluid py-4">
             <div class="row">
               <div class="col-12 col-xl-12 glass-content">
                <div class="card-body px-0 pb-2">
                    <div class="table-responsive">
                      <table class="table align-items-center mb-0">
                        <thead>
                          <tr>
                            <th class="text-uppercase text-secondary font-weight-bolder opacity-7">SL</th>
                            <th class="text-uppercase text-secondary font-weight-bolder opacity-7">Image</th>
                            <th class="text-uppercase text-secondary font-weight-bolder opacity-7">Brand Name</th>
                            <th class="text-center text-uppercase text-secondary font-weight-bolder opacity-7">Description</th>
                            <th class="text-center text-uppercase text-secondary font-weight-bolder opacity-7">Status</th>
                            <th class="text-center text-uppercase text-secondary font-weight-bolder opacity-7">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr v-for="brand in brands" :key="brand.id">
                            <td>
                              <div class="d-flex px-2 py-1">
                                <div class="d-flex flex-column justify-content-center">
                                  <h6 class="mb-0 text-sm">{{brand.id}}</h6>
                                </div>
                              </div>
                            </td>
                            <td>
                             <div class="d-flex flex-column justify-content-center">
                               <img :src="brand.image" alt="" srcset="">
                             </div>
                            </td>
                            <td class="align-middle">
                                <span class="text-xs font-weight-bold"> {{brand.brand}} </span>
                            </td>
                            <td class="align-middle text-center text-sm">
                              {{trim(brand.description,100, "...")}}
                            </td>
                            <td class="align-middle">
                                {{brand.status}}
                            </td>
                            <td class="align-middle">
                                <span class="text-xs font-weight-bold"> </span>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                </div>
               </div>
             </div>
           </div>
          </div>
          <!--END Brand PANE-->

          <!--START Manufacturer PANE-->
          <div class="tab-pane fade" id="manufacturer" role="tabpanel" aria-labelledby="manufacturer-tab">
           <div class="container-fluid py-4">
             <div class="row">
               <div class="col-11 col-xl-11 glass-content">
                <div class="card-body px-0 pb-2">
                    <div class="table-responsive">
                      <table class="table align-items-center mb-0">
                        <thead>
                          <tr>
                            <th class="text-uppercase text-secondary font-weight-bolder opacity-7">SL</th>
                            <th class="text-uppercase text-secondary font-weight-bolder opacity-7">Image</th>
                            <th class="text-uppercase text-secondary font-weight-bolder opacity-7">Manufacturer Name</th>
                            <th class="text-center text-uppercase text-secondary font-weight-bolder opacity-7">Description</th>
                            <th class="text-center text-uppercase text-secondary font-weight-bolder opacity-7">Status</th>
                            <th class="text-center text-uppercase text-secondary font-weight-bolder opacity-7">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr v-for="manufacturer in manufacturers" :key="manufacturer.id">
                            <td>
                              <div class="d-flex px-2 py-1">
                                <div class="d-flex flex-column justify-content-center">
                                  <h6 class="mb-0 text-sm">{{manufacturer.id}}</h6>
                                </div>
                              </div>
                            </td>
                            <td>
                             <div class="d-flex flex-column justify-content-center">
                               <img :src="manufacturer.image" alt="" srcset="">
                             </div>
                            </td>
                            <td class="align-middle">
                                <span class="text-xs font-weight-bold"> {{manufacturer.manufacturer}} </span>
                            </td>
                            <td class="align-middle text-center text-sm">
                              {{trim(manufacturer.description,100, "...")}}
                            </td>
                            <td class="align-middle">
                                <span class="text-xs font-weight-bold"> {{manufacturer.status}} </span>
                            </td>
                            <td class="align-middle">
                                <span class="text-xs font-weight-bold">  </span>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                </div>
               </div>
             </div>
           </div>
          </div>
          <!--END Manufacturer PANE-->
          </div>
        </div>
        <!--END INVENTORY TAB PANES-->

        <!--START SUPPLIER TAB PANES-->
        <div class="tab-pane fade" id="v-pills-supplier" role="tabpanel" aria-labelledby="v-pills-supplier-tab">
          <div class="row">
            <div class="col-12 col-xl-9">
             <div class="row">
               <div class="col-4 mt-3 mb-3"  v-for="data in suppliers" :key="data.id">
                <supplier_card :supplier="data" ></supplier_card>
               </div>
             </div>
            </div>
             <div class="col-12 col-xl-3 glass-content">
               <div class="card h-100">
                 <div class="card-header pb-0 p-3">
                   <h6 class="mb-0">More</h6>
                 </div>
                 <div class="card-body p-3">
                   <ul class="list-group">
                     <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2">
                       <div class="avatar me-3">
                          <i class="fa fa-comments text-secondary" aria-hidden="true"></i>
                       </div>
                       <div class="d-flex align-items-start flex-column justify-content-center">
                         <h6 class="mb-0 text-sm">Notifications</h6>
                         <p class="mb-0 text-xs">Important Noifications</p>
                       </div>
                     </li>
                   </ul>
                 </div>
               </div>
             </div>
          </div>
        </div>
        <!--END SUPPLIER TAB PANES-->

        <!--START CO-CATALOGUE PANES-->
        <div class="tab-pane fade" id="v-pills-catalogue" role="tabpanel" aria-labelledby="v-pills-catalogue-tab">
          <!--START CATALOGUE TAB LINKS-->
          <ul class="nav nav-pills" id="catalogue-tab-links" role="tablist">
            <li class="nav-item" role="presentation">
               <button class="nav-link active" id="weight-tab" data-bs-toggle="tab" data-bs-target="#weight" type="button" role="tab" aria-controls="weight" aria-selected="true">Weight</button>
            </li>
            <li class="nav-item" role="presentation">
             <button class="nav-link" id="measurement-tab" data-bs-toggle="tab" data-bs-target="#measurement" type="button" role="tab" aria-controls="measurement" aria-selected="false">Measurement</button>
            </li>
            <li class="nav-item" role="presentation">
             <button class="nav-link" id="attribute-tab" data-bs-toggle="tab" data-bs-target="#attribute" type="button" role="tab" aria-controls="attribute" aria-selected="false">Attribute</button>
            </li>
          </ul>
          <!--END CATALOGUE TAB LINKS-->

          <div class="tab-content" id="catalogue-tab-content">
           <!--START WEIGHT PANE-->
           <div  class="tab-pane fade active show" id="weight" role="tabpanel" aria-labelledby="weight-tab">
            <div class="container-fluid py-4">
              <div class="row">
                 <div class="col-11 col-xl-11 glass-content">
                   <div class="card-body px-0 pb-2">
                       <div class="table-responsive">
                         <table class="table align-items-center mb-0">
                           <thead>
                             <tr>
                               <th class="text-uppercase text-secondary font-weight-bolder opacity-7">SL</th>
                               <th class="text-uppercase text-secondary font-weight-bolder opacity-7">Weight Unit</th>
                               <th class="text-center text-uppercase text-secondary font-weight-bolder opacity-7">Action</th>
                             </tr>
                           </thead>
                           <tbody>
                             <tr v-for="weight in weights" :key="weight.id">
                               <td>
                                <div class="d-flex flex-column justify-content-center">
                                  <span class="text-xs font-weight-bold"> {{weight.id}} </span>
                                </div>
                               </td>
                               <td class="align-middle text-center text-sm">
                                 <span class="text-xs font-weight-bold"> {{weight.weight}} </span>
                               </td>
                               <td class="align-middle">
                                   <span class="text-xs font-weight-bold">  </span>
                               </td>
                             </tr>
                           </tbody>
                         </table>
                       </div>
                   </div>
                  </div>
              </div>
            </div>
           </div>
           <!--END WEIGHT PANE-->

           <!--START Measurement PANE-->
           <div  class="tab-pane fade" id="measurement" role="tabpanel" aria-labelledby="measurement-tab">
             <div class="container-fluid py-4">
               <div class="row">
                  <div class="col-11 col-xl-11 glass-content">
                    <div class="card-body px-0 pb-2">
                        <div class="table-responsive">
                          <table class="table align-items-center mb-0">
                            <thead>
                              <tr>
                                <th class="text-uppercase text-secondary font-weight-bolder opacity-7">SL</th>
                                <th class="text-uppercase text-secondary font-weight-bolder opacity-7">Measurement Unit</th>
                                <th class="text-center text-uppercase text-secondary font-weight-bolder opacity-7">Action</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr v-for="measurement in measurements" :key="measurement.id">
                                <td>
                                 <div class="d-flex flex-column justify-content-center">
                                   <span class="text-xs font-weight-bold"> {{measurement.id}} </span>
                                 </div>
                                </td>
                                <td class="align-middle text-center text-sm">
                                  <span class="text-xs font-weight-bold"> {{measurement.measurement}} </span>
                                </td>
                                <td class="align-middle">
                                    <span class="text-xs font-weight-bold">  </span>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                    </div>
                   </div>
               </div>
             </div>
           </div>
           <!--END Measurement PANE-->

           <!--START ATTRIBUTE PANE-->
           <div  class="tab-pane fade" id="attribute" role="tabpanel" aria-labelledby="attribute-tab">
            <div class="container-fluid py-4">
              <div class="row">
                 <div class="col-11 col-xl-11 glass-content">
                   <div class="card-body px-0 pb-2">
                       <div class="table-responsive">
                         <table class="table align-items-center mb-0">
                           <thead>
                             <tr>
                               <th class="text-uppercase text-secondary font-weight-bolder opacity-7">SL</th>
                               <th class="text-uppercase text-secondary font-weight-bolder opacity-7">Attribute Name</th>
                               <th class="text-uppercase text-secondary font-weight-bolder opacity-7">Attribute Item</th>
                               <th class="text-center text-uppercase text-secondary font-weight-bolder opacity-7">Action</th>
                             </tr>
                           </thead>
                           <tbody>
                             <tr v-for="attribute in attributes" :key="attribute.id">
                               <td>
                                <div class="d-flex flex-column justify-content-center">
                                  <span class="text-xs font-weight-bold"> {{attribute.id}} </span>
                                </div>
                               </td>
                               <td class="align-middle text-center text-sm">
                                 <span class="text-xs font-weight-bold"> {{attribute.attribute}} </span>
                               </td>
                               <td class="align-middle text-center text-sm">
                                 <span class="text-xs font-weight-bold"> {{attribute.item}} </span>
                               </td>
                               <td class="align-middle">

                               </td>
                             </tr>
                           </tbody>
                         </table>
                       </div>
                   </div>
                  </div>
              </div>
            </div>
           </div>
          <!--END ATTRIBUTE PANE-->
          </div>
        </div>
        <!--END CO-CATALOGUE PANES-->

        <!--START PURCHASE PANES-->
        <div class="tab-pane fade" id="v-pills-purchase" role="tabpanel" aria-labelledby="v-pills-purchase-tab">
           <!--START PURCHASE DASH-->
           <div class="row mt-4 mb-4">
             <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
               <div class="card glass-content">
                 <div class="card-body p-3">
                   <div class="row">
                     <div class="col-8">
                       <div class="numbers">
                         <p class="text-sm mb-0 text-capitalize font-weight-bold">Received Purchases</p>
                         <h5 class="font-weight-bolder mb-0">
                           $53,000
                           <span class="text-success text-sm font-weight-bolder">+55%</span>
                         </h5>
                       </div>
                     </div>
                     <div class="col-4 text-end">
                       <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                         <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                       </div>
                     </div>
                   </div>
                 </div>
               </div>
             </div>
             <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
               <div class="card glass-content">
                 <div class="card-body p-3">
                   <div class="row">
                     <div class="col-8">
                       <div class="numbers">
                         <p class="text-sm mb-0 text-capitalize font-weight-bold">Pending Purchase</p>
                         <h5 class="font-weight-bolder mb-0">
                           2,300
                           <span class="text-success text-sm font-weight-bolder">45%</span>
                         </h5>
                       </div>
                     </div>
                     <div class="col-4 text-end">
                       <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                         <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                       </div>
                     </div>
                   </div>
                 </div>
               </div>
             </div>
             <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
               <div class="card glass-content">
                 <div class="card-body p-3">
                   <div class="row">
                     <div class="col-8">
                       <div class="numbers">
                         <p class="text-sm mb-0 text-capitalize font-weight-bold">Returned </p>
                         <h5 class="font-weight-bolder mb-0">
                           +400
                           <span class="text-danger text-sm font-weight-bolder">55%</span>
                         </h5>
                       </div>
                     </div>
                     <div class="col-4 text-end">
                       <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                         <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
                       </div>
                     </div>
                   </div>
                 </div>
               </div>
             </div>
           </div>
           <!--END PURCHASE DASH-->
            <ul class="nav nav-tabs" id="myTab" role="tablist">
              <li class="nav-item" role="presentation">
                <button class="nav-link active" id="purchase-tab" data-bs-toggle="tab" data-bs-target="#purchase" type="button" role="tab" aria-controls="purchase" aria-selected="true">Purchases</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link active" id="pending-tab" data-bs-toggle="tab" data-bs-target="#pending" type="button" role="tab" aria-controls="pending" aria-selected="true">Pending</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="received-tab" data-bs-toggle="tab" data-bs-target="#received" type="button" role="tab" aria-controls="received" aria-selected="false">Received</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="returned-tab" data-bs-toggle="tab" data-bs-target="#returned" type="button" role="tab" aria-controls="returned" aria-selected="false">Returned</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="damaged-tab" data-bs-toggle="tab" data-bs-target="#damaged" type="button" role="tab" aria-controls="damaged" aria-selected="false">Damaged</button>
              </li>
            </ul>
            <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade show active" id="purchase" role="tabpanel" aria-labelledby="purchase-tab">
                <div class="row">
                 <div class="col-12 col-xl-9 glass-content">
                     <purchase_table :purchases="purchases"></purchase_table>
                 </div>
                 <div class="col-12 col-xl-3 glass-content">
                   <div class="card h-100">
                     <div class="card-header pb-0 p-3">
                       <h6 class="mb-0">More</h6>
                     </div>
                     <div class="card-body p-3">
                       <ul class="list-group">
                         <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2">
                           <div class="avatar me-3">
                              <i class="fa fa-comments text-secondary" aria-hidden="true"></i>
                           </div>
                           <div class="d-flex align-items-start flex-column justify-content-center">
                             <h6 class="mb-0 text-sm">Notifications</h6>
                             <p class="mb-0 text-xs">Important Noifications</p>
                           </div>
                         </li>
                       </ul>
                     </div>
                   </div>
                 </div>
                </div>
              </div>
              <div class="tab-pane fade" id="pending" role="tabpanel" aria-labelledby="pending-tab">
                <purchase_table :purchases="purchases"></purchase_table>
              </div>
              <div class="tab-pane fade" id="received" role="tabpanel" aria-labelledby="received-tab">
                <purchase_table :purchases="purchases"></purchase_table>
              </div>
              <div class="tab-pane fade" id="returned" role="tabpanel" aria-labelledby="returned-tab">
                <purchase_table :purchases="purchases"></purchase_table>
              </div>
              <div class="tab-pane fade" id="damaged" role="tabpanel" aria-labelledby="damaged-tab">
                <purchase_table :purchases="purchases"></purchase_table>
              </div>
            </div>
        </div>
        <!--END PURCHASE PANES-->
        <!--START CUSTOMER TAB-->
        <div class="tab-pane fade" id="v-pills-customer" role="tabpanel" aria-labelledby="v-pills-customer-tab">
          <div class="row">
              <div class="col-12 col-xl-12 glass-content">
                <div class="card-body px-0 pb-2">
                    <div class="table-responsive">
                      <table class="table align-items-center mb-0">
                        <thead>
                          <tr>
                            <th class="text-uppercase text-secondary font-weight-bolder opacity-7">SL</th>
                            <th class="text-uppercase text-secondary font-weight-bolder opacity-7">Avatar</th>
                            <th class="text-uppercase text-secondary font-weight-bolder opacity-7">First Name</th>
                            <th class="text-center text-uppercase text-secondary font-weight-bolder opacity-7">Last Name</th>
                            <th class="text-center text-uppercase text-secondary font-weight-bolder opacity-7">Email</th>
                            <th class="text-center text-uppercase text-secondary font-weight-bolder opacity-7">Phone</th>
                            <th class="text-center text-uppercase text-secondary font-weight-bolder opacity-7">Status</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr v-for="customer in customers" :key="customer.id">
                            <td>
                              <div class="d-flex px-2 py-1">
                                <div class="d-flex flex-column justify-content-center">
                                  <h6 class="mb-0 text-sm">{{customer.id}}</h6>
                                </div>
                              </div>
                            </td>
                            <td>
                                <img :src="customer.avatar" class="avatar-size" alt="" srcset="">
                            </td>
                            <td class="align-middle text-center text-sm">
                              <span class="text-xs font-weight-bold"> {{customer.firstname}} </span>
                            </td>
                            <td class="align-middle">
                                <span class="text-xs font-weight-bold"> {{customer.lastname}}</span>
                            </td>
                            <td class="align-middle">
                                <span class="text-xs font-weight-bold"> {{customer.phone}} </span>
                            </td>
                            <td class="align-middle">
                                <span class="text-xs font-weight-bold"> {{customer.date}} </span>
                            </td>
                            <td class="align-middle">
                                <span class="text-xs font-weight-bold"> {{customer.status}} </span>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                </div>
               </div>
          </div>
        </div>
        <!--END CUSTOMER TAB-->
        <!--START EXPENSE TAB-->
        <div class="tab-pane fade" id="v-pills-expense" role="tabpanel" aria-labelledby="v-pills-expense-tab">
          <div class="row">
              <div class="col-11 col-xl-11 glass-content">
                <div class="card-body px-0 pb-2">
                    <div class="table-responsive">
                      <table class="table align-items-center mb-0">
                        <thead>
                          <tr>
                            <th class="text-uppercase text-secondary font-weight-bolder opacity-7">SL</th>
                            <th class="text-uppercase text-secondary font-weight-bolder opacity-7">Expense</th>
                            <th class="text-uppercase text-secondary font-weight-bolder opacity-7">Date</th>
                            <th class="text-uppercase text-secondary font-weight-bolder opacity-7">Expense Category</th>
                            <th class="text-uppercase text-secondary font-weight-bolder opacity-7">Total</th>
                            <th class="text-uppercase text-secondary font-weight-bolder opacity-7">user</th>
                            <th class="text-center text-uppercase text-secondary font-weight-bolder opacity-7">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr v-for="expense in expenses" :key="expense.id">
                            <td>
                              <div class="d-flex px-2 py-1">
                                <div class="d-flex flex-column justify-content-center">
                                  <h6 class="mb-0 text-sm">{{expense.id}}</h6>
                                </div>
                              </div>
                            </td>
                            <td class="align-middle text-center text-sm">
                              <span class="text-xs font-weight-bold"> {{trim(expense.expense,100, "...")}} </span>
                            </td>
                            <td class="align-middle text-center text-sm">
                              <span class="text-xs font-weight-bold"> {{expense.expense_category.category}} </span>
                            </td>
                            <td class="align-middle text-center text-sm">
                              <span class="text-xs font-weight-bold"> {{expense.total}} </span>
                            </td>
                            <td class="align-middle text-center text-sm">
                              <span class="text-xs font-weight-bold"> {{expense.user.name}} </span>
                            </td>
                            <td class="align-middle">

                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                </div>
               </div>
          </div>
        </div>
        <!--END EXPENSE TAB-->
          <!--START EXPENSE Category TAB-->
          <div class="tab-pane fade" id="v-pills-expense-category" role="tabpanel" aria-labelledby="v-pills-expense-category-tab">
            <div class="row">
                <div class="col-11 col-xl-11 glass-content">
                  <div class="card-body px-0 pb-2">
                      <div class="table-responsive">
                        <table class="table align-items-center mb-0">
                          <thead>
                            <tr>
                              <th class="text-uppercase text-secondary font-weight-bolder opacity-7">SL</th>
                              <th class="text-uppercase text-secondary font-weight-bolder opacity-7">Image</th>
                              <th class="text-uppercase text-secondary font-weight-bolder opacity-7">Category</th>
                              <th class="text-uppercase text-secondary font-weight-bolder opacity-7">Description</th>
                              <th class="text-uppercase text-secondary font-weight-bolder opacity-7">Status</th>
                              <th class="text-center text-uppercase text-secondary font-weight-bolder opacity-7">Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr v-for="expensecategory in expensecategories" :key="expensecategory.id">
                              <td>
                                <div class="d-flex px-2 py-1">
                                  <div class="d-flex flex-column justify-content-center">
                                    <h6 class="mb-0 text-sm">{{expensecategory.id}}</h6>
                                  </div>
                                </div>
                              </td>
                              <td class="align-middle text-center text-sm">
                                <img :src="expensecategory.image" alt="" srcset="">
                              </td>
                              <td class="align-middle text-center text-sm">
                                <span class="text-xs font-weight-bold"> {{expensecategory.category}} </span>
                              </td>
                              <td class="align-middle text-center text-sm">
                                <span class="text-xs font-weight-bold"> {{trim(expensecategory.description,100, "...")}} </span>
                              </td>
                              <td class="align-middle text-center text-sm">
                                <span class="text-xs font-weight-bold"> {{expensecategory.status}} </span>
                              </td>
                              <td class="align-middle">

                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                  </div>
                 </div>
            </div>
          </div>
          <!--END EXPENSE Category TAB-->
        <!--START INVOICE TAB-->
        <div class="tab-pane fade" id="v-pills-invoice" role="tabpanel" aria-labelledby="v-pills-invoice-tab">
          <div class="row">
              <div class="col-11 col-xl-11 glass-content">
                <div class="card-body px-0 pb-2">
                    <div class="table-responsive">
                      <table class="table align-items-center mb-0">
                        <thead>
                          <tr>
                            <th class="text-uppercase text-secondary font-weight-bolder opacity-7">SL</th>
                            <th class="text-uppercase text-secondary font-weight-bolder opacity-7">Warehouse</th>
                            <th class="text-center text-uppercase text-secondary font-weight-bolder opacity-7">Date</th>
                            <th class="text-center text-uppercase text-secondary font-weight-bolder opacity-7">Customer</th>
                            <th class="text-center text-uppercase text-secondary font-weight-bolder opacity-7">Total</th>
                            <th class="text-center text-uppercase text-secondary font-weight-bolder opacity-7">Total Paid</th>
                            <th class="text-center text-uppercase text-secondary font-weight-bolder opacity-7">Payment Type</th>
                            <th class="text-center text-uppercase text-secondary font-weight-bolder opacity-7">Status</th>
                            <th class="text-center text-uppercase text-secondary font-weight-bolder opacity-7">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr v-for="invoice in invoices" :key="invoice.id">
                            <td>
                              <div class="d-flex px-2 py-1">
                                <div class="d-flex flex-column justify-content-center">
                                  <h6 class="mb-0 text-sm">{{invoice.id}}</h6>
                                </div>
                              </div>
                            </td>
                            <td class="align-middle text-center text-sm">
                              <span class="text-xs font-weight-bold"> {{invoice.warehouse.name}} </span>
                            </td>
                            <td class="align-middle text-center text-sm">
                              <span class="text-xs font-weight-bold"> {{invoice.date}} </span>
                            </td>
                            <td class="align-middle text-center text-sm">
                              <span class="text-xs font-weight-bold"> {{invoice.customer.firstname }} {{ invoice.customer.lastname}}</span>
                            </td>
                            <td class="align-middle text-center text-sm">
                              <span class="text-xs font-weight-bold"> {{invoice.total }}</span>
                            </td>
                            <td class="align-middle text-center text-sm">
                              <span class="text-xs font-weight-bold"> {{invoice.total }}</span>
                            </td>
                            <td class="align-middle text-center text-sm">
                              <span class="text-xs font-weight-bold"> {{invoice.payment_type.type }}</span>
                            </td>
                            <td class="align-middle text-center text-sm">
                              <span class="text-xs font-weight-bold"> {{invoice.status }}</span>
                            </td>
                            <td class="align-middle">

                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                </div>
               </div>
          </div>
        </div>
        <!--END INVOICE TAB-->
        <!--START SALE TAB-->
        <div class="tab-pane fade" id="v-pills-sale" role="tabpanel" aria-labelledby="v-pills-sale-tab">
          <div class="row">
              <div class="col-11 col-xl-11 glass-content">
                <div class="card-body px-0 pb-2">
                    <div class="table-responsive">
                      <table class="table align-items-center mb-0">
                        <thead>
                          <tr>
                            <th class="text-uppercase text-secondary font-weight-bolder opacity-7">SL</th>
                            <th class="text-uppercase text-secondary font-weight-bolder opacity-7">Invoice Id</th>
                            <th class="text-uppercase text-secondary font-weight-bolder opacity-7">Warehouse</th>
                            <th class="text-center text-uppercase text-secondary font-weight-bolder opacity-7">Date</th>
                            <th class="text-center text-uppercase text-secondary font-weight-bolder opacity-7">Customer</th>
                            <th class="text-center text-uppercase text-secondary font-weight-bolder opacity-7">Total</th>
                            <th class="text-center text-uppercase text-secondary font-weight-bolder opacity-7">Total Paid</th>
                            <th class="text-center text-uppercase text-secondary font-weight-bolder opacity-7">Payment Type</th>
                            <th class="text-center text-uppercase text-secondary font-weight-bolder opacity-7">Status</th>
                            <th class="text-center text-uppercase text-secondary font-weight-bolder opacity-7">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr v-for="sale in sales" :key="sale.id">
                            <td>
                              <div class="d-flex px-2 py-1">
                                <div class="d-flex flex-column justify-content-center">
                                  <h6 class="mb-0 text-sm">{{sale.id}}</h6>
                                </div>
                              </div>
                            </td>
                            <td>
                              <div class="d-flex px-2 py-1">
                                <div class="d-flex flex-column justify-content-center">
                                  <h6 class="mb-0 text-sm">{{sale.invoice_id}}</h6>
                                </div>
                              </div>
                            </td>
                            <td class="align-middle text-center text-sm">
                              <span class="text-xs font-weight-bold"> {{sale.warehouse.name}} </span>
                            </td>
                            <td class="align-middle text-center text-sm">
                              <span class="text-xs font-weight-bold"> {{sale.date}} </span>
                            </td>
                            <td class="align-middle text-center text-sm">
                              <span class="text-xs font-weight-bold"> {{sale.customer.firstname }} {{ invoice.customer.lastname}}</span>
                            </td>
                            <td class="align-middle text-center text-sm">
                              <span class="text-xs font-weight-bold"> {{sale.total }}</span>
                            </td>
                            <td class="align-middle text-center text-sm">
                              <span class="text-xs font-weight-bold"> {{sale.total }}</span>
                            </td>
                            <td class="align-middle text-center text-sm">
                              <span class="text-xs font-weight-bold"> {{sale.payment_type.type }}</span>
                            </td>
                            <td class="align-middle text-center text-sm">
                              <span class="text-xs font-weight-bold"> {{sale.status }}</span>
                            </td>
                            <td class="align-middle">

                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                </div>
               </div>
          </div>
        </div>
        <!--END SALE TAB-->
        <!--START EXPENSE REPORT TAB-->
        <div class="tab-pane fade" id="v-pills-report" role="tabpanel" aria-labelledby="v-pills-report-tab">
         <div class="container-fluid py-4">
           <div class="row">
             <div class="col-11 col-xl-11 glass-content">
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
             <div class="col-12 glass-content col-xl-3">
               <div class="card h-100">
                 <div class="card-header pb-0 p-3">
                   <h6 class="mb-0">More</h6>
                 </div>
                 <div class="card-body p-3">
                   <ul class="list-group">
                     <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2">
                       <div class="avatar me-3">
                        <i class="fa fa-commenting-o" aria-hidden="true"></i>
                       </div>
                       <div class="d-flex align-items-start flex-column justify-content-center">
                         <h6 class="mb-0 text-sm">Notifications</h6>
                         <p class="mb-0 text-xs">Settings notifications</p>
                       </div>
                     </li>
                   </ul>
                 </div>
               </div>
             </div>
           </div>
         </div>
        </div>
        <!--END EXPENSE REPORT TAB-->
        <!--START SALES REPORT TAB-->
        <div class="tab-pane fade" id="v-pills-report" role="tabpanel" aria-labelledby="v-pills-report-tab">
         <div class="container-fluid py-4">
           <div class="row">
             <div class="col-11 col-xl-11 glass-content">
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
             <div class="col-12 glass-content col-xl-3">
               <div class="card h-100">
                 <div class="card-header pb-0 p-3">
                   <h6 class="mb-0">More</h6>
                 </div>
                 <div class="card-body p-3">
                   <ul class="list-group">
                     <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2">
                       <div class="avatar me-3">
                        <i class="fa fa-commenting-o" aria-hidden="true"></i>
                       </div>
                       <div class="d-flex align-items-start flex-column justify-content-center">
                         <h6 class="mb-0 text-sm">Notifications</h6>
                         <p class="mb-0 text-xs">Settings notifications</p>
                       </div>
                     </li>
                   </ul>
                 </div>
               </div>
             </div>
           </div>
         </div>
        </div>
        <!--END SALES REPORT TAB-->
        <!--START PURCHASE REPORT TAB-->
        <div class="tab-pane fade" id="v-pills-report" role="tabpanel" aria-labelledby="v-pills-report-tab">
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
             <div class="col-12 glass-content col-xl-3">
               <div class="card h-100">
                 <div class="card-header pb-0 p-3">
                   <h6 class="mb-0">More</h6>
                 </div>
                 <div class="card-body p-3">
                   <ul class="list-group">
                     <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2">
                       <div class="avatar me-3">
                        <i class="fa fa-commenting-o" aria-hidden="true"></i>
                       </div>
                       <div class="d-flex align-items-start flex-column justify-content-center">
                         <h6 class="mb-0 text-sm">Notifications</h6>
                         <p class="mb-0 text-xs">Settings notifications</p>
                       </div>
                     </li>
                   </ul>
                 </div>
               </div>
             </div>
           </div>
         </div>
        </div>
        <!--END PURCHASE REPORT TAB-->
        <!--START PAYMENT REPORT TAB-->
        <div class="tab-pane fade" id="v-pills-report" role="tabpanel" aria-labelledby="v-pills-report-tab">
         <div class="container-fluid py-4">
           <div class="row">
             <div class="col-11 col-xl-11 glass-content">
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
             <div class="col-12 glass-content col-xl-3">
               <div class="card h-100">
                 <div class="card-header pb-0 p-3">
                   <h6 class="mb-0">More</h6>
                 </div>
                 <div class="card-body p-3">
                   <ul class="list-group">
                     <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2">
                       <div class="avatar me-3">
                        <i class="fa fa-commenting-o" aria-hidden="true"></i>
                       </div>
                       <div class="d-flex align-items-start flex-column justify-content-center">
                         <h6 class="mb-0 text-sm">Notifications</h6>
                         <p class="mb-0 text-xs">Settings notifications</p>
                       </div>
                     </li>
                   </ul>
                 </div>
               </div>
             </div>
           </div>
         </div>
        </div>
        <!--END PAYMENT REPORT TAB-->
        <!--START WAREHOUSE REPORT TAB-->
        <div class="tab-pane fade" id="v-pills-report" role="tabpanel" aria-labelledby="v-pills-report-tab">
         <div class="container-fluid py-4">
           <div class="row">
             <div class="col-11 col-xl-11 glass-content">
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
             <div class="col-12 glass-content col-xl-3">
               <div class="card h-100">
                 <div class="card-header pb-0 p-3">
                   <h6 class="mb-0">More</h6>
                 </div>
                 <div class="card-body p-3">
                   <ul class="list-group">
                     <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2">
                       <div class="avatar me-3">
                        <i class="fa fa-commenting-o" aria-hidden="true"></i>
                       </div>
                       <div class="d-flex align-items-start flex-column justify-content-center">
                         <h6 class="mb-0 text-sm">Notifications</h6>
                         <p class="mb-0 text-xs">Settings notifications</p>
                       </div>
                     </li>
                   </ul>
                 </div>
               </div>
             </div>
           </div>
         </div>
        </div>
        <!--END WAREHOUSE REPORT TAB-->
        <!--START SETTINGS TAB-->
        <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
         <div class="container-fluid py-4">
           <div class="row">
             <div class="col-11 col-xl-11 glass-content">
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
             <div class="col-12 glass-content col-xl-3">
               <div class="card h-100">
                 <div class="card-header pb-0 p-3">
                   <h6 class="mb-0">More</h6>
                 </div>
                 <div class="card-body p-3">
                   <ul class="list-group">
                     <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2">
                       <div class="avatar me-3">
                        <i class="fa fa-commenting-o" aria-hidden="true"></i>
                       </div>
                       <div class="d-flex align-items-start flex-column justify-content-center">
                         <h6 class="mb-0 text-sm">Notifications</h6>
                         <p class="mb-0 text-xs">Settings notifications</p>
                       </div>
                     </li>
                   </ul>
                 </div>
               </div>
             </div>
           </div>
         </div>
        </div>
        <!--END SETTINGS TAB-->
      </div>
    </div>
     <Footer></Footer>
     <user_info_modal></user_info_modal>
     <supplier_info_modal></supplier_info_modal>
  </div>
</template>

<script>
    import { defineComponent } from 'vue'

    import Footer from '../../../Theme/widgets/Footer.vue'
    import credentials from "../../../Profile/Show.vue";

    import user_card from '../components/cards/user-card.vue'
    import user_info_modal from "../components/modals/user-info-modal.vue"

    import supplier_card from '../components/cards/supplier-card.vue'
    import supplier_info_modal from "../components/modals/supplier-info-modal.vue"

     import purchase_table from "../components/tables/purchase-table.vue"

    export default defineComponent({
        components: {
            Footer,
            credentials,
            user_card,
            user_info_modal,
            supplier_card,
            supplier_info_modal,
            purchase_table
        },
        data() {
            return {
                warehouse: [],
                products: [],
                categories: [],
                brands: [],
                manufacturers: [],
                attributes: [],
                measurements: [],
                weights: [],
                purchases: [],
                customers: [],
                suppliers: [],
                expenses: [],
                expensecategories: [],
                invoices: [],
                sales: [],
                managers: [],
            }
        },

        methods: {
            getManagers()
            {
                axios.get('managers')
                .then((response)=>{
                    this.managers = response.data
                })
            },
            trim(text, length, comment)
            {
                return text.substr(0,length) + comment;
            },
            getSales()
            {
                axios.get("sales")
                .then((response)=>{
                    this.sales = response.data
                    console.log(this.sales)
                })
            },
            getInvoices()
            {
                axios.get("invoices")
                .then((response)=>{
                    this.invoices = response.data
                    console.log(this.invoices)
                })
            },
            getExpensesCategories()
            {
                axios.get("expenses/categories")
                .then((response)=>{
                    this.expensecategories = response.data
                    console.log(this.expensecategories)
                })
            },
            getExpenses()
            {
                axios.get("expenses")
                .then((response)=>{
                    this.expenses = response.data
                    console.log(this.expenses)
                })
            },
            getSuppliers()
            {
                axios.get("suppliers")
                .then((response)=>{
                    this.suppliers = response.data
                    console.log(this.suppliers)
                })
            },
            getCustomers()
            {
                axios.get("customers")
                .then((response)=>{
                    this.customers = response.data
                    console.log(this.customers)
                })
            },
            getPurchases()
            {
                axios.get("purchases")
                .then((response)=>{
                    this.purchases = response.data
                    console.log(this.purchases)
                })
            },
            getWeights()
            {
                axios.get("weights")
                .then((response)=>{
                    this.weights = response.data
                    console.log(this.weights)
                })
            },
            getMeasurements()
            {

                axios.get("measurements")
                .then((response)=>{
                    this.measurements = response.data
                    console.log(this.measurements)
                })
            },
            getAttributes()
            {

                axios.get("attributes")
                .then((response)=>{
                    this.attributes = response.data
                    console.log(this.attributes)
                })
            },
            getBrands()
            {

                axios.get("products/brands")
                .then((response)=>{
                    this.brands = response.data
                    console.log(this.brands)
                })
            },
            getManufacturers()
            {

                axios.get("products/manufacturers")
                .then((response)=>{
                    this.manufacturers = response.data
                    console.log(this.manufacturers)
                })
            },
            getProductCategories()
            {

                axios.get("products/categories")
                .then((response)=>{
                    this.categories = response.data
                    console.log(this.categories)
                })
            },
            getProducts()
            {

                axios.get("products")
                .then((response)=>{
                    this.products = response.data
                    console.log(this.products)
                })
            },
            getWarehouse()
            {

                axios.get("warehouse")
                .then((response)=>{
                    this.warehouse = response.data
                    console.log(this.warehouse)
                })
            }
        },
        mounted(){
            this.getWarehouse()
            this.getProducts()
            this.getProductCategories()
            this.getManufacturers()
            this.getBrands()
            this.getAttributes()
            this.getMeasurements()
            this.getWeights()
            this.getPurchases()
            this.getCustomers()
            this.getSuppliers()
            this.getExpenses()
            this.getExpensesCategories()
            this.getInvoices()
            this.getSales()
            this.getManagers()
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
