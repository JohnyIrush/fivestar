// import Vue from 'vue';
import axios from 'axios'
import { createApp } from 'vue'
import { createStore } from 'vuex'

import SecureLS from 'secure-ls'

const ls = new SecureLS({isCompression: false});

import createPersistedState from "vuex-persistedstate";
//import * as Cookies from "js-cookie";

import Cookies from 'vue-cookies'

export const store = createStore({
    state () {
      return {
        Application:{
            Theme: {
                name: 'default theme glass',
                key: 'default-theme'
            },
            inteliadmission:{
                application: {
                    form:{
                        id: '',
                        details: {}
                    }
                },
                interview: {
                    form:{
                        id: '',
                        details: {}
                    }
                },
                admission: {
                    form:{
                        id: '',
                        details: {}
                    }
                },
                leave: {
                    form:{
                        id: '',
                        details: {}
                    }
                },
                expell: {
                    form:{
                        id: '',
                        details: {}
                    }
                },
                ban: {
                    form:{
                        id: '',
                        details: {}
                    }
                }
            },
            inteliform:{
                Template: {
                    
                },
                Builder: {

                },
            }
        },
        school :{
            sch_name: 'Inteli School',
            sch_email: '',
            sch_address: '',
            sch_web: '',
            sch_level_id: '',
            sch_phone: '',
            sch_location: '',
            sch_gender_id: '',
            sch_type_id: '',
            sch_system_id: '',
            sch_logo: '',
            sch_inteli_code: '',

            user_id: '',
            admin_phone: '',
            version: '',
            amount: ''
        },
        student: {
            firstname: '',
            lastname: '',
            address: '',
            city_id: '',
            town_id: '',
            gender_id: '',
            guardian_id: '',
            birthday: '',
            qualification: {
                student_id: '',
                school_name: '',
                school_level_id: '',
                subjects: [],
                meangrade: '',
                meanscore:'',
                points: '',
                start_year: '',
                end_year: '',
                duration: ''
            },

            level_id: '',
            stream_id: '',
            subjects: [],
            leadership_id: '',
            sports: [],
            clubs: [],

            hostel_id: '',
            room_id: '',
            guardian:{
                firstname: '',
                lastname: '',
                address: '',
                city_id: '',
                town_id: '',
                gender_id: '',
            }
        },
        staff: {
            firstname: '',
            lastname: '',
            address: '',
            city_id: '',
            town_id: '',
            gender_id: '',

            category_id: '',
            occupation_id: '',
            section_id : '',
            hostel_id: '',
            levels: [],
            subjects: [],
            department_id: ''
        },
        user:
        {
            name: '',
            email: '',
            phone: '',
            password: '',
            password_confirmation: '',
            terms: false,
            profile_photo_path: ''
        },
        registration_type: '',
        manager: [],
        count: 0,
        supplier: [],
        todos: [
            { id: 1, text: '...', done: true },
            { id: 2, text: 'TODO Two', done: false }
          ],
        Library:{
            analytics: [],
        },
        librarian: [],
        profile: [],
        Modal:{
            title: '',
            ComponentType: '',
            ComponentName: '',
            modalSize: '',
            modalWidth: '',
            modalClasses: '',
            modalDialogClasses: '',
            modalContentClasses: '',
            backDrop: false
        },
        form:{
            formEditData: [],
            formType: '',
            modalSize: '',
            fields: []
        },
        Card:{
            data: []
        },
        Table:{
            data: []
        },
        Collapse:{
            portId: '',
            collapseId: '',
            componentId: '',
            componentName: ''
        },
        TabularCard:{

        },
        MiniTabularCard:{

        },
        List:{
            data: [],
            fieldName: '',
            iconName: ''
        },
        SettingSelect:{
            options: {}
        }
      }
    },
    plugins: [
      createPersistedState({
        storage: {
          getItem: (key) => ls.get(key),
          // Please see https://github.com/js-cookie/js-cookie#json, on how to handle JSON.
          setItem: (key, value) =>
            ls.set(key, value,/* { expires: 3, secure: true }*/),
          removeItem: (key) => ls.remove(key),
        },
      }),
    ],
    getters:
    {
     doneTodos (state){
         return state.todos.filter(todo => todo.done)
       },
     doneTodosCount (state, getters) {
         //return getters.doneTodos.length
       },
       getTodoById: (state) => (id) => {
        return state.todos.find(todo => todo.id === id)
      },
       getSetting: (state) => (path) => {
        return state.Application[path.package][path.widget][path.component][path.value]
      }
    },
    mutations: {
        getManager: (state, payload) =>
        {
            state.manager = payload
        },
        increment (state, payload) {
          state.count++
          state.count += payload
        },
        getSupplier: (state, payload) =>
        {
            state.supplier = payload
        },
        getProfile: (state, payload) =>
        {
            state.profile = payload
        },
        updateSetting: (state, payload) =>
        {
            console.log("converted",JSON.parse(JSON.stringify(payload.option)), "unconverted",payload.option)
            state.Application[payload.settings.package][payload.settings.widget][payload.settings.component][payload.settings.value] = JSON.parse(JSON.stringify(payload.option))
            console.log("state", state, "payload", payload)
        }
    },
    actions: {
        getManager: (context, payload) =>{
            context.commit("getManager", payload)
        },
        getProfile: (context, payload) =>{
            context.commit("getProfile", payload)
        },
        getSupplier: (context, payload) =>{
            context.commit("getSupplier", payload)
        },
        increment: (context, payload) =>{
            context.commit("increment", payload)
        },
    }
  })
