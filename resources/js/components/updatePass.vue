<template>
    <div>
        <div class="col-md-4 text-md-right text-left" v-if="!pass">
               <a class="text-primary" style="cursor: pointer" @click="togglePass">{{changing}}</a>
        </div>

        <div class="form-group row container text-center" v-if="pass">
            <input type="password" name="password" class="form-control mb-0 mt-3" id="exampleInputPassword2" :placeholder="passlang" required>
            <div class="d-flex mt-3">
                <button class="btn btn-hover">{{changing}}</button>
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
            pass : false
        }
    },
    methods: {
        togglePass: function ()
        {
            this.pass = !this.pass
            // console.log(this.password)
        }
    },
    props:{
        changing: String,
        passlang: String,
        cancal: String
    }
}
</script>
