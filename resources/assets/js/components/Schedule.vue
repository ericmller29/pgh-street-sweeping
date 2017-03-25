<script>
	export default{
		data: function(){
			return {
				hoods: [],
				keyword: ''
			}
		},
		beforeCreate(){
			var _this = this;

			axios.get('/schedule')
				.then(( response ) => {
					var payload = response['data'];

					_this.hoods = payload;
				})
		},
		methods: {
			filter: function(keyword){
				return this.hoods.filter(hood => {
					return hood.name.toLowerCase().indexOf(this.keyword.toLowerCase()) > -1;
				});
			}
		}
	}
</script>