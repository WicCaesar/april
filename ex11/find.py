import requests
# Run with python3 find.py. Enter a Pokémon's name to get its abilities.
def getability(pokemon):
	response = requests.get(f'https://pokeapi.co/api/v2/pokemon/{pokemon}')
	if response.status_code != 200: # status code for a successful request
		print("Who's that Pokémon?") # early return to exit the function asap
		exit()
	abilities = response.json()['abilities'] #stores abilities in a variable
	abilitynames = [ability['ability']['name'] for ability in abilities] #stores ability names in a variable using list comprehension and a for loop to iterate through the abilities
	print(f"Name: {pokemon.capitalize()}\nAbilities:")
	for abilityname in abilitynames:
		print(f"- {abilityname.capitalize()}")

if __name__ == '__main__': # only run if this file is run directly, not if it's imported as a module
	pokemon = input("Enter the name of a Pokémon: ").lower()
	if pokemon == "":
		print("It's MissingNo!")
		exit()
	getability(pokemon)
