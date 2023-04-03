/* ************************************************************************** */
/*                                                                            */
/*                                                        :::      ::::::::   */
/*   frame.c                                            :+:      :+:    :+:   */
/*                                                    +:+ +:+         +:+     */
/*   By: cnascime <cnascime@student.42.rio>         +#+  +:+       +#+        */
/*                                                +#+#+#+#+#+   +#+           */
/*   Created: 2023/04/02 08:51:37 by cnascime          #+#    #+#             */
/*   Updated: 2023/04/03 01:34:03 by cnascime         ###   ########.fr       */
/*                                                                            */
/* ************************************************************************** */

#include <stdio.h>
#include <unistd.h>
#include <string.h>
#include <stdlib.h>

int			findlargest(char ***megazord);
void		printframe(char frame, int width);
char		**ft_split(char const *s, char c);
char		***ft_splat(int argc, const char **argv);
static int	ft_shardcounter(char *altogether, char forbidden);
static int	ft_isforbidden(char character, char forbidden);
static char	*ft_superbonder(char *altogether, char forbidden);
static int	ft_shardsize(char *altogether, char forbidden);

int	main(int argc, const char **argv)
{
	int		i = 1, j = 0, k = 0;
	int		width;
	char	**megazord;

	i = 0;
	j = 0;
	k = 0;

	if (argc > 1)
	{
		megazord = *ft_splat(argc, argv);
		width = findlargest(&megazord) + 4;
		printframe('*', width);
		while (megazord[i])
		{
			while (megazord[i][j])
			{
				k = strlen(&megazord[i][j]) + 2;
				printf("* %s", &megazord[i][j]);
				while (k++ < width)
					printf(" ");
				printf("*\n");
				j++;
			}
			i++;
		}
		printframe('*', width);
	}
	return (0);
}

// Scans through all of the shards and returns the length of the largest one.
int	findlargest(char ***megazord)
{
	int		i;
	int		j;
	int		largest;
	char	**shards;

	i = 0;
	largest = 0;

	while (shards[i])
	{
		shards = *megazord;
		while (shards[i][j])
		{
			if (strlen(&shards[i][j]) > largest)
				largest = strlen(&shards[i][j]);
			j++;
		}
		i++;
	}
	printf("Largest string: %s (%d characters long).\n", &shards[i][j], largest);
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

// A char pointer pointer pointer that reunites every shard of every string.
char	***ft_splat(int argc, const char **argv)
{
	int		i;
	char	***megazord;

	megazord = calloc(argc, sizeof(char **));
	if (!megazord)
		return (NULL);
	i = 1;
	while (argv[i])
	{
		megazord[i - 1] = ft_split(argv[i], ' ');
		i++;
	}
	return (megazord);
}

// Glues ~shards~ in a single ~array~ again, filtering out forbidden characters.
char	**ft_split(char const *s, char c)
{
	int		shard;
	int		count;
	char	**kintsugi;

	if (!s)
		return (NULL);
	shard = 0;
	count = ft_shardcounter((char *)s, c);
	kintsugi = malloc(sizeof(char *) * (count + 1));
	if (!kintsugi)
	{
		free (kintsugi);
		return (NULL);
	}
	while (shard < count)
	{
		while (ft_isforbidden(*s, c))
			s++;
		kintsugi[shard] = ft_superbonder((char *)s, c);
		while (!ft_isforbidden(*s, c))
			s++;
		shard++;
	}
	kintsugi[shard] = 0;
	return (kintsugi);
}

// Counts the amount of shards to reveal the array size.
static int	ft_shardcounter(char *altogether, char forbidden)
{
	int	i;
	int	shardcount;

	i = 0;
	shardcount = 0;
	while (altogether[i] != '\0')
	{
		while (*altogether && ft_isforbidden(*altogether, forbidden))
			altogether++;
		while (*altogether && !ft_isforbidden(*altogether, forbidden))
			altogether++;
		if (*altogether || !ft_isforbidden(*(altogether - 1), forbidden))
			shardcount++;
	}
	return (shardcount);
}

// Checks whether the character in question is forbidden.
// 1 (TRUE) if it's forbidden or EOL, 2 (FALSE) if it's allowed.
static int	ft_isforbidden(char character, char forbidden)
{
	if (character == forbidden)
		return (1);
	if (character == '\0')
		return (1);
	return (0);
}

// Glues valid ~characters~ in a row in their own ~shard~, one by one.
static char	*ft_superbonder(char *altogether, char forbidden)
{
	int		i;
	char	*shard;

	shard = malloc(sizeof(char) * (ft_shardsize(altogether, forbidden) + 1));
	if (!shard)
		return (NULL);
	i = 0;
	while (!ft_isforbidden(*altogether, forbidden))
	{
		shard[i] = *altogether;
		i++;
		altogether++;
	}
	shard[i] = '\0';
	return (shard);
}

// Just measures the necessary amount of bytes for memory allocation.
static int	ft_shardsize(char *altogether, char forbidden)
{
	int	size;

	size = 0;
	while (!ft_isforbidden(*altogether, forbidden))
	{
		size++;
		altogether++;
	}
	return (size);
}
