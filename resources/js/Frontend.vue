<template>
   <div>
    
       <Navbar></Navbar>

       <div>
            <router-view></router-view>
       </div>
       
   </div> 
    
    
</template>

<script>
import Navbar from './components/Navbar.vue';
    export default{
    data() {
        return {
            // message: "ciao ciao con le mani"
        };
    },
    components: { Navbar }
}
</script>

<style scoped>
.text-center{
    text-align: center;
    padding-top: 3rem;
}
.d-flex{
    display: flex;
    text-align: center;
}
</style>