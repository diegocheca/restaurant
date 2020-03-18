<template>
    <div class="container">
        <div class="card card-default">
            <div class="card-header">Example Component</div>

            <input v-model="mens" />

            <div class="card-body">
                I'm an example component. {{mens}}
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        

        data() {
			return {
				  mens:"HOLA desde vue",
				};
        }
        
        
    }
</script>
