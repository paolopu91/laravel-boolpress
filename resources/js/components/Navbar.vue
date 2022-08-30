<template>
    <div>

        <div class="d-flex">

           
            <div class="pr">
                <router-link to="/">Home</router-link>
            </div>
            
        
            <div class="pr">
                <router-link to="/contatti" >Contatti</router-link>
            </div>
            
        
            

        </div>
    </div>
</template>

<script>

</script>

<style scoped>
.d-flex{
    display: flex;
    justify-content: center;
}
.pr{
    padding-right:2rem ;
}
</style>