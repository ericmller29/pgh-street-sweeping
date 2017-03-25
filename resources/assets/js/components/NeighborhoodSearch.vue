<script>
	export default{
		data: function(){
			return {
				searching: false,
				showLoader: true,
				noResults: false,
				query: '',
				typeTimer: null,
				results: []
			}
		},
		methods: {
			search: function(){				
				var _this = this;
				window.clearTimeout(this.typeTimer);

				if(_this.query === ''){
					_this.searching = false;
					_this.showLoader = true;
					_this.results = [];

					return false;
				}else{
					_this.searching = true;
				}

				this.typeTimer = setTimeout(() => {
					axios.get('/hoods/search?query=' + this.query)
						.then((payload) => {
							var results = payload.data;

							_this.showLoader = false;
							_this.noResults = false;
							_this.results = results;
						})
						.catch((error) => {
							_this.showLoader = false;
							_this.noResults = true;
						})
				}, 600);
			}
		}
	}
</script>