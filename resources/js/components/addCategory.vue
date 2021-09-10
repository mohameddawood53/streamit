<template>
    <div class="mb-3">
        <label>{{labl}}</label>
        <select class="form-control form-control-lg" @change="toggleCat($event)" name="type" >
            <option selected="" disabled value="0">{{selectcat}}</option>
            <option value="1" :selected="inittype == 1">{{main}}</option>
            <option value="2" :selected="inittype == 2">{{nestedmain}}</option>
            <option value="3" :selected="inittype == 3">{{nestedsub}}</option>
        </select>

            <div class="text-center" v-if="isLoading1 || isLoading2">
                <jumper background="#E40813"></jumper>
            </div>

        <div v-if="maincat" class="mt-2">
            <label>{{maincats}}</label>
            <select class="form-control form-control-lg" name="main">
                <option selected="" disabled value="0" >{{chsemain}}</option>
                <option :value="cat.id"  v-for="cat in mainval" v-bind:key="cat.id">{{cat.name}}</option>
<!--                <option value="1">{{main}}</option>-->
<!--                <option value="2">{{nested}}</option>-->
            </select>
        </div>


        <div v-if="subcat" class="mt-2">
            <label>{{subcats}}</label>
            <select class="form-control form-control-lg" name="sub">
                <option selected="" disabled value="0">{{chsesub}}</option>
                <option :value="cat.id" v-for="cat in subval" v-bind:key="cat.id">{{cat.name}}</option>
<!--                <option value="2">{{nested}}</option>-->
            </select>
        </div>

    </div>
</template>

<script>
import {Jumper} from "vue-loading-spinner"

export default {
    mounted() {
        if (this.inittype == 2)
        {
            setTimeout(()=>{
                axios.get("/api/main-cat").then(res=>(this.mainval = res.data))
                this.maincat = true
                this.subcat = false
            },1000)
        }else if(this.inittype == 3)
        {
            setTimeout(()=>{
                axios.get("/api/sub-cat").then(res=>(this.subval = res.data))
                this.maincat = false
                this.subcat = true
            },1000)

        }
        console.log('Component mounted.')
    },
    data: function (){
        return{
            maincat : false,
            subcat : false,
            mainval : [],
            subval : [],
            isLoading1 : false,
            isLoading2 : false,
            theme: {
                nav: "#141414",
                navItem: "#141414",
                navActiveItem: "#fff",
                slider: "#141414",
                arrow: "#f3f3f3",
            },
        }
    }
    ,
    props: {
        labl : String,
        cats : [],
        selectcat : String,
        main : String,
        nestedmain: String,
        nestedsub: String,
        chsemain: String,
        chsesub : String,
        maincats : String,
        subcats : String,
        inittype : 0,
    },
    methods: {
        toggleCat : function (event){


                if(event.target.value === "1")
                {
                    this.maincat = false
                    this.subcat = false
                    this.isLoading1 = false
                    this.isLoading2 = false
                }
                else if(event.target.value === "2")
                {
                    this.maincat = false
                    this.subcat = false
                    this.isLoading1 = true
                    setTimeout( ()=>{
                        this.maincat = true
                        this.subcat = false
                        axios.get("/api/main-cat").then(res=>(this.mainval = res.data))
                        this.isLoading1 = false
                        this.isLoading2 = false
                    }, 1000)


                }else if(event.target.value === "3"){
                    this.maincat = false
                    this.subcat = false
                    this.isLoading2 = true
                    setTimeout(()=>{
                        this.maincat = false
                        this.subcat = true
                        axios.get("/api/sub-cat").then(res=>(this.subval = res.data))
                        this.isLoading1 = false
                        this.isLoading2 = false
                    },1000)
                }

        }
    },
    components: {
        Jumper
    }
}
</script>
