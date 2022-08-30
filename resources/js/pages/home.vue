<template>
    <div>
        <div class="container">
            <h4 class="text-center">la canzone {{ message }}</h4>
        </div>
        <div class="content" style="background-color: antiquewhite">
                <div class="text-center">
                    <h1>
                       BoolPress 
                    </h1>
                </div>
                
                <div>
                    <!-- <img src="{{ asset("/img/welcome.png")}}" alt=""> -->
                </div>
            </div>
            
            <PostList></PostList>
    </div>
</template>

<script>
    export default{
data() {
    return {
        message: "Ciao Ciao con le mani"
    };
},
}
</script>

<style scoped>
.text-center{
    text-align: center;
}
</style>