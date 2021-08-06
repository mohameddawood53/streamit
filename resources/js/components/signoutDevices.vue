<template>
    <div>


        <a class="text-body d-block mb-1" @click="togglePass" style="cursor: pointer">{{logout}}</a>
        <div class="form-group" v-if="password">
            <input type="password" name="password" class="form-control mb-0 mt-3" id="exampleInputPassword2" :placeholder="passlang" required>
            <div class="d-flex mt-3">
                <button class="btn btn-hover">{{logout}}</button>
                <a class="btn btn-link" style="cursor: pointer" @click="togglePass">{{cancal}}</a>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    mounted() {
        console.log('Component mounted.')
    },
    data()
    {
        return {
            password : false
        }
    },
    methods: {
        togglePass: function ()
        {
            this.password = !this.password
            console.log(this.password)
        }
    },
    props:{
        passlang : String,
        logout : String,
        cancal : String
    }
}
</script>
