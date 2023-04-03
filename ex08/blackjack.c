/* ************************************************************************** */
/*                                                                            */
/*                                                        :::      ::::::::   */
/*   blackjack.c                                        :+:      :+:    :+:   */
/*                                                    +:+ +:+         +:+     */
/*   By: cnascime <cnascime@student.42.rio>         +#+  +:+       +#+        */
/*                                                +#+#+#+#+#+   +#+           */
/*   Created: 2023/04/02 08:14:06 by cnascime          #+#    #+#             */
/*   Updated: 2023/04/02 14:53:11 by cnascime         ###   ########.fr       */
/*                                                                            */
/* ************************************************************************** */

#include <stdio.h>

int	isallowed(char character, char *allowed);

int	main(int argc, char **argv)
{
	int	i = 0, total = 0;

	if (argc == 2)
	{
		while (argv[1][i])
		{
			if (!isallowed(argv[1][i], "23456789TJVQDKRA"))
			{
				printf("%c is not a valid card.\n", argv[1][i]);
				return (0);
			}
			if (argv[1][i] == 'T' || (argv[1][i] == 'J' || argv[1][i] == 'V')
			|| (argv[1][i] == 'Q' || argv[1][i] == 'D')
			|| (argv[1][i] == 'K' || argv[1][i] == 'R'))
				total += 10;
			else if (argv[1][i] >= '2' && argv[1][i] <= '9')
				total += argv[1][i] - '0'; // Converts the char to int.
			i++;
		}
		i = 0;
		while (argv[1][i])
		{
			if (argv[1][i] == 'A' && total + 11 <= 21)
				total += 11;
			else if (argv[1][i] == 'A' && total + 11 > 21)
				total += 1;
			i++;
		}
		if (total == 21)
			printf("Blackjack!\n");
		else
			printf("%d\n", total);
	}
	else
		printf("Type the cards in your hand altogether (23456789TJQKA).\n");
	return (0);
}

// Checks whether the character in question is in the forbidden list.
// 1-true if it's forbidden, 2-false if it's allowed.
int	isallowed(char character, char *allowed)
{
	int	i;

	i = 0;
	while (allowed[i] != '\0')
	{
		if (character == allowed[i])
			return (1);
		allowed++;
	}
	if (character == '\0')
		return (1);
	return (0);
}
