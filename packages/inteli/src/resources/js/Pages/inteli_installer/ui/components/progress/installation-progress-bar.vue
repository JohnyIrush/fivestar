<template>
   <section class="step-wizard ">
	   <div class="step-wizard-list glass-content">
		   <div class="step-wizard-item">
			   <span class="progress-count">1</span>
			   <span @click="Stage()" class="progress-label">Preparing</span>
		   </div>
		   <div class="step-wizard-item current-item ">
			   <span class="progress-count">2</span>
			   <span @click="preparingStage()" class="progress-label">App</span>
		   </div>
		   <div class="step-wizard-item">
			<span class="progress-count">3</span>
			<span @click="Stage()" class="progress-label">Packages</span>
		    </div>
			<div class="step-wizard-item">
				<span class="progress-count">4</span>
				<span @click="Stage()" class="progress-label">Storage</span>
			</div>
			<div class="step-wizard-item">
				<span class="progress-count">5</span>
				<span @click="Stage()" class="progress-label">Config</span>
			</div>
			<div class="step-wizard-item">
				<span class="progress-count">6</span>
				<span @click="Stage()" class="progress-label">Launch</span>
			</div>
	   </div>
   </section>

</template>

<script>
export default {
    methods: {
            /**
             * Next Actions
            */
            preparingStage()
            {
              const currentTab = document.querySelectorAll(".tab-pane")
              const nextTab = document.querySelector("#pills-preparing")
              currentTab.forEach(element => {
                if (element.classList.contains("show"))
                {
                  element.classList.remove("show");
                }

                if (element.classList.contains("active"))
                {
                  element.classList.remove("active");
                }
              });
              nextTab.classList.add("show", "active")
            },
            appStage()
            {
              const currentTab = document.querySelectorAll(".tab-pane")
              const nextTab = document.querySelector("#pills-app")
              currentTab.forEach(element => {
                if (element.classList.contains("show"))
                {
                  element.classList.remove("show");
                }

                if (element.classList.contains("active"))
                {
                  element.classList.remove("active");
                }
              });
              nextTab.classList.add("show", "active")
            }
            ,
            packagesStage()
            {
              const currentTab = document.querySelectorAll(".tab-pane")
              const nextTab = document.querySelector("#pills-packages")
              currentTab.forEach(element => {
                if (element.classList.contains("show"))
                {
                  element.classList.remove("show");
                }

                if (element.classList.contains("active"))
                {
                  element.classList.remove("active");
                }
              });
              nextTab.classList.add("show", "active")
            },
            storageStage()
            {
              const currentTab = document.querySelectorAll(".tab-pane")
              const nextTab = document.querySelector("#pills-storage")
              currentTab.forEach(element => {
                if (element.classList.contains("show"))
                {
                  element.classList.remove("show");
                }

                if (element.classList.contains("active"))
                {
                  element.classList.remove("active");
                }
              });
              nextTab.classList.add("show", "active")
            },

            configStage()
            {
              const currentTab = document.querySelectorAll(".tab-pane")
              const nextTab = document.querySelector("#pills-config")
              currentTab.forEach(element => {
                if (element.classList.contains("show"))
                {
                  element.classList.remove("show");
                }

                if (element.classList.contains("active"))
                {
                  element.classList.remove("active");
                }
              });
              nextTab.classList.add("show", "active")
            },

            launchStage()
            {
              const currentTab = document.querySelectorAll(".tab-pane")
              const nextTab = document.querySelector("#pills-launch")
              currentTab.forEach(element => {
                if (element.classList.contains("show"))
                {
                  element.classList.remove("show");
                }

                if (element.classList.contains("active"))
                {
                  element.classList.remove("active");
                }
              });
              nextTab.classList.add("show", "active")
            },
    },
}
</script>



<style scoped>

.glass-header
{
    /*top: -5px;
    right: 20px;
    left: 5px;
    padding: 20px 50px;
    display: flex;
    justify-content: space-between;
    align-items: center;*/
    background: rgba(255, 255, 255, 0.2);
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.05);
    border-radius: 20px;
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.5);
    border-top: 1px solid rgba(255, 255, 255, 0.25);
    border-left: 1px solid rgba(255, 255, 255, 0.5);
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

.step-wizard
{
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
}

.step-wizard-list
{
    box-shadow: 0 15px 25px rgba(0, 0, 0, 0.1);
    color: #333;
    list-style: none;
    border-radius: 10px;
    display: flex;
    padding: 20px 10px;
    position: relative;
    z-index: 10;

}

.step-wizard-item
{
    padding: 0 20px;
    flex-basis: 0;
    -webkit-box-flex: 1;
    -ms-flex-positive: 1;
    flex-grow: 1;
    max-width: 100%;
    display: flex;
    flex-direction: column;
    text-align: center;
    min-width: 170px;
    position: relative;
}

.step-wizard-item + .step-wizard-item::after
{
    content: '';
    position: absolute;
    left: 0;
    top: 19px;
    background: #d43f8d;
    width: 100%;
    height: 2px;
    transform: translateX(-50%);
    z-index: -10;
} 

.progress-count
{
    height: 40px;
    width: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    font-weight: 600;
    margin: 0 auto;
    position: relative;
    z-index: 10;
    color: transparent;
}

.progress-count::after
{
    content: "";
    height: 40px;
    width: 40px;
    background: #d43f8d;
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
    border-radius: 50%;
    z-index: -10;
}

.progress-count::before
{
    content: "";
    height: 10px;
    width: 20px;
    border-left: 3px solid #fff;
    border-bottom: 3px solid #fff;
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -60%) rotate(-45deg);
    transform-origin: center center;
}

.progresss-label
{
    font-size: 14px;
    font-weight: 600;
}

.current-item .progress-count::before,
.current-item ~ .step-wizard-item .progress-count::before
{
    display: none;

}

.current-item ~ .step-wizard-item .progress-count::after
{
    height: 10px;
    width: 10px ;
}

.current-item ~ .step-wizard-item .progresss-label
{
    opacity: 0.5; 
}

.current-item .progress-count::after
{
    background: #fff;
    border: 2px solid #d43f8d;
}

.current-item .progress-count
{
    color: #d43f8d;
}

.progress-label
{
    color: purple;
}

@media (max-width: 902px)
{
    .step-wizard-list
    {
        padding: 10px 5px;
    }
    .step-wizard-item
    {
        min-width: 20px;
        padding: 0 3px;
    }

    .progress-label
    {
        font-size: 10px;
        font-weight: 600;
    }
}
</style>