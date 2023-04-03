/* ************************************************************************** */
/*                                                                            */
/*                                                        :::      ::::::::   */
/*   framecopy.c                                        :+:      :+:    :+:   */
/*                                                    +:+ +:+         +:+     */
/*   By: cnascime <cnascime@student.42.rio>         +#+  +:+       +#+        */
/*                                                +#+#+#+#+#+   +#+           */
/*   Created: 2023/04/02 08:51:37 by cnascime          #+#    #+#             */
/*   Updated: 2023/04/02 17:58:39 by cnascime         ###   ########.fr       */
/*                                                                            */
/* ************************************************************************** */

#include <stdio.h>
#include <unistd.h>
#include <string.h>
#include <stdlib.h>

int			findlargest(const char **argv);
void		printframe(char frame, int width);

int	main(int argc, const char **argv)
{
	int		i;
	int		j;
	int		width;

	i = 1;
	j = 0;

	width = findlargest(argv) + 4;
	if (argc > 1)
	{
		printframe('*', width);
		while (argv[i])
		{
			j = strlen(argv[i]) + 3;
			printf("* %s", argv[i]);
			while (j++ < width)
				printf(" ");
			printf("*\n");
			i++;
		}
		printframe('*', width);
	}
	return (0);
}

int	findlargest(const char **argv)
{
	int	i;
	int	largest;

	i = 1;
	largest = 0;

	while (argv[i])
	{
		if (strlen(argv[i]) > largest)
			largest = strlen(argv[i]);
		i++;
	}
	return (largest);
}

void	printframe(char frame, int width)
{
	int	i;

	i = 0;
	while (i++ < width)
		write(1, &frame, 1);
	printf("\n");
}
