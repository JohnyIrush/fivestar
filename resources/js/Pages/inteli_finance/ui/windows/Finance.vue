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
            <div class="row">
              <div class="col-12">
                <statistic-card-data :statistics="statistics" />
              </div>
            </div>
           </tab>
           <tab title="Account" 
                component="TabButton"
                icon_classes="fas fa-piggy-bank fa-2x"
                tab_button_classes="mt-6">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-8">
                <div class="row">
                  <div class="col-xl-6 mb-xl-0 mb-4">
                    <div class="card bg-transparent shadow-xl">
                      <div class="overflow-hidden position-relative border-radius-xl" style="background-image: url('/theme/assets/img/curved-images/curved14.jpg');">
                        <span class="mask bg-gradient-dark"></span>
                        <div class="card-body position-relative z-index-1 p-3">
                          <i class="fas fa-wifi text-white p-2"></i>
                          <h5 class="text-white mt-4 mb-5 pb-2">4562&nbsp;&nbsp;&nbsp;1122&nbsp;&nbsp;&nbsp;4594&nbsp;&nbsp;&nbsp;7852</h5>
                          <div class="d-flex">
                            <div class="d-flex">
                              <div class="me-4">
                                <p class="text-white text-sm opacity-8 mb-0">Card Holder</p>
                                <h6 class="text-white mb-0">Jack Peterson</h6>
                              </div>
                              <div>
                                <p class="text-white text-sm opacity-8 mb-0">Expires</p>
                                <h6 class="text-white mb-0">11/22</h6>
                              </div>
                            </div>
                            <div class="ms-auto w-20 d-flex align-items-end justify-content-end">
                              <img class="w-60 mt-2" src="/theme/assets/img/logos/mastercard.png" alt="logo">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-6">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="card">
                          <div class="card-header mx-4 p-3 text-center">
                            <div class="icon icon-shape icon-lg bg-gradient-primary shadow text-center border-radius-lg">
                              <i class="fas fa-landmark opacity-10"></i>
                            </div>
                          </div>
                          <div class="card-body pt-0 p-3 text-center">
                            <h6 class="text-center mb-0">Salary</h6>
                            <span class="text-xs">Belong Interactive</span>
                            <hr class="horizontal dark my-3">
                            <h5 class="mb-0">+$2000</h5>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6 mt-md-0 mt-4">
                        <div class="card">
                          <div class="card-header mx-4 p-3 text-center">
                            <div class="icon icon-shape icon-lg bg-gradient-primary shadow text-center border-radius-lg">
                              <i class="fab fa-paypal opacity-10"></i>
                            </div>
                          </div>
                          <div class="card-body pt-0 p-3 text-center">
                            <h6 class="text-center mb-0">Paypal</h6>
                            <span class="text-xs">Freelance Payment</span>
                            <hr class="horizontal dark my-3">
                            <h5 class="mb-0">$455.00</h5>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12 mb-lg-0 mb-4">
                    <div class="card mt-4">
                      <div class="card-header pb-0 p-3">
                        <div class="row">
                          <div class="col-6 d-flex align-items-center">
                            <h6 class="mb-0">Payment Method</h6>
                          </div>
                          <div class="col-6 text-end">
                            <a class="btn bg-gradient-dark mb-0" href="javascript:;"><i class="fas fa-plus"></i>&nbsp;&nbsp;Add New Card</a>
                          </div>
                        </div>
                      </div>
                      <div class="card-body p-3">
                        <div class="row">
                          <div class="col-md-6 mb-md-0 mb-4">
                            <div class="card card-body border card-plain border-radius-lg d-flex align-items-center flex-row">
                              <img class="w-10 me-3 mb-0" src="/theme/assets/img/logos/mastercard.png" alt="logo">
                              <h6 class="mb-0">****&nbsp;&nbsp;&nbsp;****&nbsp;&nbsp;&nbsp;****&nbsp;&nbsp;&nbsp;7852</h6>
                              <i class="fas fa-pencil-alt ms-auto text-dark cursor-pointer" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Card"></i>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="card card-body border card-plain border-radius-lg d-flex align-items-center flex-row">
                              <img class="w-10 me-3 mb-0" src="/theme/assets/img/logos/visa.png" alt="logo">
                              <h6 class="mb-0">****&nbsp;&nbsp;&nbsp;****&nbsp;&nbsp;&nbsp;****&nbsp;&nbsp;&nbsp;5248</h6>
                              <i class="fas fa-pencil-alt ms-auto text-dark cursor-pointer" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Card"></i>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="card h-100">
                  <div class="card-header pb-0 p-3">
                    <div class="row">
                      <div class="col-6 d-flex align-items-center">
                        <h6 class="mb-0">Invoices</h6>
                      </div>
                      <div class="col-6 text-end">
                        <button class="btn btn-outline-primary btn-sm mb-0">View All</button>
                      </div>
                    </div>
                  </div>
                  <div class="card-body p-3 pb-0">
                    <ul class="list-group">
                      <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                        <div class="d-flex flex-column">
                          <h6 class="mb-1 text-dark font-weight-bold text-sm">March, 01, 2020</h6>
                          <span class="text-xs">#MS-415646</span>
                        </div>
                        <div class="d-flex align-items-center text-sm">
                          $180
                          <button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"><i class="fas fa-file-pdf text-lg me-1"></i> PDF</button>
                        </div>
                      </li>
                      <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                        <div class="d-flex flex-column">
                          <h6 class="text-dark mb-1 font-weight-bold text-sm">February, 10, 2021</h6>
                          <span class="text-xs">#RV-126749</span>
                        </div>
                        <div class="d-flex align-items-center text-sm">
                          $250
                          <button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"><i class="fas fa-file-pdf text-lg me-1"></i> PDF</button>
                        </div>
                      </li>
                      <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                        <div class="d-flex flex-column">
                          <h6 class="text-dark mb-1 font-weight-bold text-sm">April, 05, 2020</h6>
                          <span class="text-xs">#FB-212562</span>
                        </div>
                        <div class="d-flex align-items-center text-sm">
                          $560
                          <button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"><i class="fas fa-file-pdf text-lg me-1"></i> PDF</button>
                        </div>
                      </li>
                      <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                        <div class="d-flex flex-column">
                          <h6 class="text-dark mb-1 font-weight-bold text-sm">June, 25, 2019</h6>
                          <span class="text-xs">#QW-103578</span>
                        </div>
                        <div class="d-flex align-items-center text-sm">
                          $120
                          <button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"><i class="fas fa-file-pdf text-lg me-1"></i> PDF</button>
                        </div>
                      </li>
                      <li class="list-group-item border-0 d-flex justify-content-between ps-0 border-radius-lg">
                        <div class="d-flex flex-column">
                          <h6 class="text-dark mb-1 font-weight-bold text-sm">March, 01, 2019</h6>
                          <span class="text-xs">#AR-803481</span>
                        </div>
                        <div class="d-flex align-items-center text-sm">
                          $300
                          <button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"><i class="fas fa-file-pdf text-lg me-1"></i> PDF</button>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-7 mt-4">
                <div class="card">
                  <div class="card-header pb-0 px-3">
                    <h6 class="mb-0">Billing Information</h6>
                  </div>
                  <div class="card-body pt-4 p-3">
                    <ul class="list-group">
                      <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                        <div class="d-flex flex-column">
                          <h6 class="mb-3 text-sm">Oliver Liam</h6>
                          <span class="mb-2 text-xs">Company Name: <span class="text-dark font-weight-bold ms-sm-2">Viking Burrito</span></span>
                          <span class="mb-2 text-xs">Email Address: <span class="text-dark ms-sm-2 font-weight-bold">oliver@burrito.com</span></span>
                          <span class="text-xs">VAT Number: <span class="text-dark ms-sm-2 font-weight-bold">FRB1235476</span></span>
                        </div>
                        <div class="ms-auto text-end">
                          <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="javascript:;"><i class="far fa-trash-alt me-2"></i>Delete</a>
                          <a class="btn btn-link text-dark px-3 mb-0" href="javascript:;"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>
                        </div>
                      </li>
                      <li class="list-group-item border-0 d-flex p-4 mb-2 mt-3 bg-gray-100 border-radius-lg">
                        <div class="d-flex flex-column">
                          <h6 class="mb-3 text-sm">Lucas Harper</h6>
                          <span class="mb-2 text-xs">Company Name: <span class="text-dark font-weight-bold ms-sm-2">Stone Tech Zone</span></span>
                          <span class="mb-2 text-xs">Email Address: <span class="text-dark ms-sm-2 font-weight-bold">lucas@stone-tech.com</span></span>
                          <span class="text-xs">VAT Number: <span class="text-dark ms-sm-2 font-weight-bold">FRB1235476</span></span>
                        </div>
                        <div class="ms-auto text-end">
                          <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="javascript:;"><i class="far fa-trash-alt me-2"></i>Delete</a>
                          <a class="btn btn-link text-dark px-3 mb-0" href="javascript:;"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>
                        </div>
                      </li>
                      <li class="list-group-item border-0 d-flex p-4 mb-2 mt-3 bg-gray-100 border-radius-lg">
                        <div class="d-flex flex-column">
                          <h6 class="mb-3 text-sm">Ethan James</h6>
                          <span class="mb-2 text-xs">Company Name: <span class="text-dark font-weight-bold ms-sm-2">Fiber Notion</span></span>
                          <span class="mb-2 text-xs">Email Address: <span class="text-dark ms-sm-2 font-weight-bold">ethan@fiber.com</span></span>
                          <span class="text-xs">VAT Number: <span class="text-dark ms-sm-2 font-weight-bold">FRB1235476</span></span>
                        </div>
                        <div class="ms-auto text-end">
                          <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="javascript:;"><i class="far fa-trash-alt me-2"></i>Delete</a>
                          <a class="btn btn-link text-dark px-3 mb-0" href="javascript:;"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-5 mt-4">
                <div class="card h-100 mb-4">
                  <div class="card-header pb-0 px-3">
                    <div class="row">
                      <div class="col-md-6">
                        <h6 class="mb-0">Your Transaction's</h6>
                      </div>
                      <div class="col-md-6 d-flex justify-content-end align-items-center">
                        <i class="far fa-calendar-alt me-2"></i>
                        <small>23 - 30 March 2020</small>
                      </div>
                    </div>
                  </div>
                  <div class="card-body pt-4 p-3">
                    <h6 class="text-uppercase text-body text-xs font-weight-bolder mb-3">Newest</h6>
                    <ul class="list-group">
                      <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                        <div class="d-flex align-items-center">
                          <button class="btn btn-icon-only btn-rounded btn-outline-danger mb-0 me-3 btn-sm d-flex align-items-center justify-content-center"><i class="fas fa-arrow-down"></i></button>
                          <div class="d-flex flex-column">
                            <h6 class="mb-1 text-dark text-sm">Netflix</h6>
                            <span class="text-xs">27 March 2020, at 12:30 PM</span>
                          </div>
                        </div>
                        <div class="d-flex align-items-center text-danger text-gradient text-sm font-weight-bold">
                          - $ 2,500
                        </div>
                      </li>
                      <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                        <div class="d-flex align-items-center">
                          <button class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-3 btn-sm d-flex align-items-center justify-content-center"><i class="fas fa-arrow-up"></i></button>
                          <div class="d-flex flex-column">
                            <h6 class="mb-1 text-dark text-sm">Apple</h6>
                            <span class="text-xs">27 March 2020, at 04:30 AM</span>
                          </div>
                        </div>
                        <div class="d-flex align-items-center text-success text-gradient text-sm font-weight-bold">
                          + $ 2,000
                        </div>
                      </li>
                    </ul>
                    <h6 class="text-uppercase text-body text-xs font-weight-bolder my-3">Yesterday</h6>
                    <ul class="list-group">
                      <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                        <div class="d-flex align-items-center">
                          <button class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-3 btn-sm d-flex align-items-center justify-content-center"><i class="fas fa-arrow-up"></i></button>
                          <div class="d-flex flex-column">
                            <h6 class="mb-1 text-dark text-sm">Stripe</h6>
                            <span class="text-xs">26 March 2020, at 13:45 PM</span>
                          </div>
                        </div>
                        <div class="d-flex align-items-center text-success text-gradient text-sm font-weight-bold">
                          + $ 750
                        </div>
                      </li>
                      <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                        <div class="d-flex align-items-center">
                          <button class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-3 btn-sm d-flex align-items-center justify-content-center"><i class="fas fa-arrow-up"></i></button>
                          <div class="d-flex flex-column">
                            <h6 class="mb-1 text-dark text-sm">HubSpot</h6>
                            <span class="text-xs">26 March 2020, at 12:30 PM</span>
                          </div>
                        </div>
                        <div class="d-flex align-items-center text-success text-gradient text-sm font-weight-bold">
                          + $ 1,000
                        </div>
                      </li>
                      <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                        <div class="d-flex align-items-center">
                          <button class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-3 btn-sm d-flex align-items-center justify-content-center"><i class="fas fa-arrow-up"></i></button>
                          <div class="d-flex flex-column">
                            <h6 class="mb-1 text-dark text-sm">Creative Tim</h6>
                            <span class="text-xs">26 March 2020, at 08:30 AM</span>
                          </div>
                        </div>
                        <div class="d-flex align-items-center text-success text-gradient text-sm font-weight-bold">
                          + $ 2,500
                        </div>
                      </li>
                      <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                        <div class="d-flex align-items-center">
                          <button class="btn btn-icon-only btn-rounded btn-outline-dark mb-0 me-3 btn-sm d-flex align-items-center justify-content-center"><i class="fas fa-exclamation"></i></button>
                          <div class="d-flex flex-column">
                            <h6 class="mb-1 text-dark text-sm">Webflow</h6>
                            <span class="text-xs">26 March 2020, at 05:00 AM</span>
                          </div>
                        </div>
                        <div class="d-flex align-items-center text-dark text-sm font-weight-bold">
                          Pending
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
           </tab>
           <tab title="Services" 
                component="TabButton"
                icon_classes="fas fa-briefcase fa-2x" 
                tab_button_classes="mt-6">
           <div class="row">
             <div class="col-xl-4">
               <modal-button @showmodal="launchModal('main-modal')" :name="'Add'" :icon_classes="'fas fa-plus'" :title="'Add New Service'" :modalSize="'modal-lg'" :componentType="'form'" :componentName="'MainForm'" :dataPath="'finance/service/create'"></modal-button>
             </div>
             <div class="col-xl-4">
               <modal-button @showmodal="launchModal('main-modal')" :name="'Services'" :icon_classes="'far fa-eye'" :title="'Services'" :modalSize="'modal-xl'" :componentType="'table'" :componentName="'TableData'" :dataPath="'finance/service/index'"></modal-button>
             </div>
             <div class="col-xl-4"></div>
           </div>
           <div class="col-12">
             <statistic-card-data :statistics="statistics" />
           </div>
           </tab>
           <tab title="Fees" 
                component="TabButton"
                icon_classes="fas fa-money-bill fa-2x"
                tab_button_classes="mt-6">
           <div class="row">
             <div class="col-xl-4">
               <modal-button @showmodal="launchModal('main-modal')" :name="'Add'" :icon_classes="'fas fa-plus'" :title="'Add New FEE'" :modalSize="'modal-lg'" :componentType="'form'" :componentName="'MainForm'" :dataPath="'finance/fee/create'"></modal-button>
             </div>
             <div class="col-xl-4">
               <modal-button @showmodal="launchModal('main-modal')" :name="'Fees'" :icon_classes="'far fa-eye'" :title="'FEES'" :modalSize="'modal-xl'" :componentType="'table'" :componentName="'TableData'" :dataPath="'finance/fee/index'"></modal-button>
             </div>
             <div class="col-xl-4"></div>
           </div> 
           <div class="col-12">
             <statistic-card-data :statistics="statistics" />
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
 <modal></modal>
</template>

<script>

import { defineComponent } from 'vue'

import Footer from '../../../Theme/widgets/Footer.vue'

import {store} from "../../../../store/store.js"
import StatisticCardData from '../../../inteli/ui/components/cards/StatisticCardData.vue';
import DetailCardData from '../../../inteli/ui/components/cards/DetailCardData.vue';

import BarChart from '../../../inteli/ui/components/charts/BarChart.vue'

import ModalButton from '../../../inteli/ui/components/buttons/ModalButton.vue'
import MainModal from '../../../inteli/ui/components/modals/MainModal.vue'

import main_menu from '../../../Theme/widgets/menus/main-menu.vue'

import TabPane from '../../../inteli/ui/components/tabs/TabPane.vue'

import Tab from '../../../inteli/ui/components/tabs/Tab.vue'

export default defineComponent({
        components: {
            Footer,
            StatisticCardData,
            BarChart,
            DetailCardData,
            ModalButton,
            MainModal,
            main_menu,
            TabPane,
            Tab
        },
        data() {
            return {
                statistics: [],
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
            getStatistics(url)
            {
                axios.get(url)
                .then((response)=>{
                   this.statistics = response.data
                })
            },
        },
        mounted()
        {
            this.getStatistics("academic/statistics")
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


.tab-content {
  width: 100% !important; 
}
</style>
